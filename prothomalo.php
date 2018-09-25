<?php
include("getData.php");
$content = getData("https://www.prothomalo.com/international/article/1558859/%E0%A6%9F%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%AE%E0%A7%8D%E0%A6%AA%E0%A7%87%E0%A6%B0-%E0%A6%9F%E0%A7%81%E0%A6%87%E0%A6%9F-%E0%A6%AC%E0%A6%A8%E0%A7%8D%E0%A6%A7-%E0%A6%B9%E0%A6%B2%E0%A7%87%E0%A6%87-%E0%A6%95%E0%A6%AE%E0%A6%AC%E0%A7%87-%E0%A6%A4%E0%A7%87%E0%A6%B2%E0%A7%87%E0%A6%B0-%E0%A6%A6%E0%A6%BE%E0%A6%AE");
$exploded_content = explode('<h1 class="title mb10">', $content);

 //title
$title_exploded_content = explode('<div class="spacer mb24"></div>',$exploded_content[1]);
$title = $title_exploded_content[0];

echo "title ->". "$title". "<br/>";

  //date
$datePublished_content = explode('itemprop="datePublished" content=', $content);
$datePublished_content = explode('">', $datePublished_content[1]);
$datePublished_content = $datePublished_content[0];
echo "datePublished_content";

  //comments
$comments_title = explode('<h4 class="comments_title">', $content);
$comments_title = explode('<div class="comment_account_wrap">', $comments_title[1]);
$comments_title = $comments_title[0];
echo "comments_title";
?>
