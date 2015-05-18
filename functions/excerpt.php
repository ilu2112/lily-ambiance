<?php
  // Source:
  // https://wordpress.stackexchange.com/questions/141125/allow-html-in-excerpt/141136#141136?newreg=2f459c4a3973421cb1c8931ed29ac0f0
  
  if ( ! function_exists( 'wpse_custom_wp_trim_excerpt' ) ) : 
    function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
      $raw_excerpt = $wpse_excerpt;
      if ( '' == $wpse_excerpt ) {
        $wpse_excerpt = get_the_content('');
        $wpse_excerpt = strip_shortcodes( $wpse_excerpt );
        $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
        $wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);

        //Set the excerpt word count and only break after sentence is complete.
        $excerpt_word_count = 1000;
        $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
        $tokens = array();
        $excerptOutput = '';
        $count = 0;

        // Divide the string into tokens; HTML tags, or words, followed by any whitespace
        preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

        foreach ($tokens[0] as $token) { 
          if ($count >= $excerpt_length && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) { 
          // Limit reached, continue until , ; ? . or ! occur at the end
            $excerptOutput .= trim($token);
            break;
          }

          // Add words to complete sentence
          $count++;

          // Append what's left of the token
          $excerptOutput .= $token;
        }

        $wpse_excerpt = trim(force_balance_tags($excerptOutput));
        return $wpse_excerpt;   
      }
      return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }
  endif; 

  remove_filter('get_the_excerpt', 'wp_trim_excerpt');
  add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt'); 
?>