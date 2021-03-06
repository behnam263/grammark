<?php

class Academic extends ProcessText {
    /**
    * The configuration settings for finding an existing trait in a text
    *
    * table = the database table from which to get errors & suggestions
    * find = the column in the table that provides the search array
    * suggestion = the column in the table that provides a corresponding suggestion
    * fail = the message to display if the score is below the limit (see score.php)
    * pass = the message to display
    * label = the semantic meaning of the score, displayed in guidance
    * score_type = the method to calculate the score. values can be per_sentence
    * or raw_count
    *
    * @static
    */
    public static $name = 'Academic language';
    public static $id = 'academic';
    public static $table = 'academic';
    public static $find = 'error';
    public static $suggestion = 'suggestion';
    public static $fails_if = '>';
    public static $fail = '<p>Gram<mark>mark</mark> identified academic style issues</b> from
    <a href="academic-style-list">this list</a>. This doesn\'t mean those are all
    the errors. It\'s very difficult for computers to understand the nuances of
    natural language.</p>';
    public static $pass = '<p>Your writing passed the academic criteria. This doesn\'t mean your writing is perfect. Even now, it\'s very difficult for computers to understand the nuances of natural language, and Gram<mark>mark</mark> cannot find things like sentence fragments, comma splices, subject-verb errors, pronoun agreement problems, and many other things.</p>';
    public static $label = ' potential academic style problems';
    public static $score_type = 'total';
    public static $standard = '0';
    public static $humanities = '0';
    public static $sciences = '0';
    public static $internet = '0';
    public static $highlight_spacer = true;
}
?>


