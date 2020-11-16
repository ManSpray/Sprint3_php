<?php

include_once "../../bootstrap.php";
include_once "./header.php";

// Helper functions
function redirect_to_root()
{
  header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

// Add new page
if (isset($_GET['page_name'])) {
  $page = new Models\Page();
  $content = new Models\Content();
  $page->setName($_GET['page_name']);
  $content->setContents($_GET['content_contents']);
  $entityManager->persist($page);
  $entityManager->flush();
  $entityManager->persist($content);
  $entityManager->flush();

  // redirect_to_root();
}

// Delete page
if (isset($_GET['delete'])) {
  $page = $entityManager->find('Models\Page', $_GET['delete']);
  $entityManager->remove($page);
  $entityManager->flush();
  // redirect_to_root();
}

?>

<div class="container" style="display: flex; justify-content:center">
  <div class="row menus col-5" style="display: block;">
    <h1>Manage Pages: </h1>
    <div class="col-12 navig">
      <?php

      $pages = $entityManager->getRepository('Models\Page')->findAll();
      print("<table>");
      print("<tr>"
        . "<td>" . "<h3>Title</h3>" . "</td>"
        . "<td>" . "<h3>Action</h3>" . "</td>"
        . "</tr>");
      foreach ($pages as $p)
        print("<tr>"
          . "<td>" . $p->getName() . "</td>"
          . "<td><a href=\"?delete={$p->getId()}\">DELETE</a>☢️</td>"
          . "<td><a href=\"./edit.php?updatable={$p->getId()}\">UPDATE</a>♻️</td>"
          . "</tr>");
      print("</table>");
      print("</pre><hr><br><br>");
      ?>
    </div>
    <br>
    <div>
      <?php
      // if (isset($_GET['updatable'])) {
      //   $page = $entityManager->find('Models\Page', $_GET['updatable']);
      //   print("<pre>Update Page: </pre>");
      //   print("
      //   <form action=\"\" method=\"POST\">
      //       <input type=\"hidden\" name=\"update_id\" value=\"{$page->getId()}\">
      //       <label for=\"name\">Page name: </label><br>
      //       <input type=\"text\" name=\"update_name\" value=\"{$page->getName()}\"><br>
      //       <input type=\"submit\" value=\"Submit\">
      //   </form>
      //     ");
      //   print("<hr>");
      // }
      ?>
    </div>
    <br>
    <div>
      <form action="" method="GET">
        <label for="page_name">Enter new page name: </label><br>
        <input type="text" name="page_name" value="Contacts"><br>
        <textarea name="content_contents" rows="4" cols="59"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>