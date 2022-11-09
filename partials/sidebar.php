<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">
        <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/hello.php'); ?>
      </span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/partials/my-twits.php" class="nav-link " aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          My Twits
        </a>
      </li>
      <li>
        <a href="/index.php" class="nav-link ">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          All Twits
        </a>
      </li>

    </ul>
    <hr>

  </div>
