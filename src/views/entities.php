<?php

include_once "../../bootstrap.php";

// Helper functions
function redirect_to_root()
{
  header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

// Add new page
if (isset($_GET['page_name'])) {
  $page = new Models\Page();
  $page->setName($_GET['page_name']);
  $entityManager->persist($page);
  $entityManager->flush();
  redirect_to_root();
}

// Delete page
if (isset($_GET['delete'])) {
  $page = $entityManager->find('Models\Page', $_GET['delete']);
  $entityManager->remove($page);
  $entityManager->flush();
  // redirect_to_root();
}

// Update
if (isset($_POST['update_name'])) {
  $page = $entityManager->find('Models\Page', $_POST['update_id']);
  $page->setName($_POST['update_name']);
  $entityManager->flush();
  // redirect_to_root();
}
// print("<pre><h1>Manage Pages: </h1>" . "<br>");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="../../css/Uzduotis11.css">
  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/fontawesome-free-5.14.0-web/css/all.css">
  <title>CmsApp. </title>
  <style>
    a:link {
      color: rgb(0, 94, 94);
    }

    a:hover {
      color: black;
    }
  </style>
</head>

<body>
  <header>
    <h1>Manage Pages: </h1>
    <div class="container">
      <div class="row menus">
        <div class="col-12 navig">
          <div class="logo">
            Cms<span class="strap_logo">App</span>.
          </div>
          <div class="custom_navigation">
            <a href="./home" class="home fa fa-home"></a>
            <a href="./pages" class="pages">pages</a>
            <a href="./features" class="features1">features</a>
            <a href="./shop" class="shop">shop</a>
            <a href="./elements" class="elements">elements</a>
            <a href="./about" class="mega">about us</a>
            <a href="CMS_app/admin" class="mega">about us</a>
            <a href="CMS_app/home" class="mega">about us</a>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>
<!-- echo "<a href=\"/CMS_app/admin\" style=\"display:block;text-align:left;\" >Log Out</a>"; -->
<!-- echo "<a href=\"/CMS_app/home\" style=\"display:block;text-align:left;\" >View Website</a>"; -->
<div class="container" style="display: flex; justify-content:center">
  <div class="row menus">
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
          . "<td><a href=\"?updatable={$p->getId()}\">UPDATE</a>♻️</td>"
          . "</tr>");
      print("</table>");
      print("</pre><hr>");

      if (isset($_GET['updatable'])) {
        $page = $entityManager->find('Models\Page', $_GET['updatable']);
        print("<pre>Update Page: </pre>");
        print("
        <form action=\"\" method=\"POST\">
            <input type=\"hidden\" name=\"update_id\" value=\"{$page->getId()}\">
            <label for=\"name\">Page name: </label><br>
            <input type=\"text\" name=\"update_name\" value=\"{$page->getName()}\"><br>
            <input type=\"submit\" value=\"Submit\">
        </form>
    ");
        print("<hr>");
      }

      print("<pre>Add new page: " . "</pre>");
      ?>

      <form action="" method="GET">
        <label for="page_name">Page name: </label><br>
        <input type="text" name="page_name" value="Contacts"><br>
        <input type="submit" value="Submit">
      </form>

      <!-- <hr> -->
    </div>
  </div>
</div>