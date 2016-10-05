<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<ul id = "nav">
    <li><a href="index.php"><?php if ($currentPage == 'index.php') {
      echo 'id="here"';}?>Home</a></li>
    
    <li><a href="page_1.php"><?php if ($currentPage == 'page_1.php') {
      echo 'id="here"';}?>Page 1</a></li>
    
    <li><a href="page_2.php"><?php if ($currentPage == 'page_2.php') {
      echo 'id="here"';}?>Page2</a></li>
    </ul>
