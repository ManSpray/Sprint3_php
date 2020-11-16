<?php

include_once "../../bootstrap.php";
include_once "./header.php";

// Update
if (isset($_POST['update_name'])) {
  $page = $entityManager->find('Models\Page', $_POST['update_id']);
  $page->setName($_POST['update_name']);
  $entityManager->flush();
  print("<h4 style='background-color:green; text-align:center; color:white;'>Edited successfully!</h4>");
  // redirect_to_root();
}
if (isset($_POST['update_content'])) {
  $content = $entityManager->find('Models\Content', $_POST['update_id']);
  $content->setName($_POST['update_contents']);
  $entityManager->flush();
  // redirect_to_root();
}

?>
<div class="container">
  <?php
  if (isset($_GET['updatable'])) {
    $page = $entityManager->find('Models\Page', $_GET['updatable']);
    $content = $entityManager->find('Models\Content', $_GET['updatable']);
    print("<pre>Update Page: </pre>");
    print("
        <form action=\"\" method=\"POST\">
            <input type=\"hidden\" name=\"update_id\" value=\"{$page->getId()}\">
            <label for=\"name\">Edit page name: </label><br>
            <input type=\"text\" name=\"update_name\" value=\"{$page->getName()}\"><br>

            <label for=\"name\">Edit content: </label><br>
            <textarea name=\"update_contents\" rows=\"4\" cols=\"50\">{$content->getContents()}</textarea>
            
            <input type=\"submit\" value=\"Submit\">
        </form>
          ");
    print("<hr>");
  }
  ?>
  <!-- <input type=\"text\" name=\"update_name\" value=\"{$content->getName()}\"><br> -->
</div>

</html>