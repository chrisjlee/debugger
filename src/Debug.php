<?php
namespace CJL;
/**
 * Logger prints to javascript console
 * 
 * Example:
 *  <?php
 *  $lyric = 'Mary had a little lamb';
 *  $C = new Debug($lyric);
 *  $C->log("A little lamb");
 *  $C->dump("So it goes.");
 * 
 */ 
class Debug {
  function log($input='') {
    return new JsOutput($input);
  }
 function dump($input='') {
    return new HtmlOutput($input);
  }
  function __construct($data='') {
    if ($data === '') return;
    // By default log to console
    $this->log($data);
    var_dump(func_get_arg('$this->__construct'));
  }
}

/**
 * Utilizes factory pattern 
 * produces JavaScript output
 */
class JsOutput {
  public function __construct($data) {
    echo "<script>console.log('$data')</script>";
  }
}
/**
 * Utilizes factory pattern 
 * produces HTML output
 */
class HtmlOutput {
  public function __construct($data) {
    echo "<p>$data<p>";
  }
}