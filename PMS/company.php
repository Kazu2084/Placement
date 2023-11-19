<?php
include('Common/applicant-sidenav-header.php');

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Table/style.css">

</head>
<div class="app-content" style="padding-bottom: 24px">
  <div class="app-content-header">
    <div>
      <h1 class="app-content-headerText">Company</h1>
    </div>
    <div></div>
    <br />
    <div class="app-content-actions">
      <div class="app-content-actions-wrapper">
        <div class="filter-button-wrapperfilter jsFilter">
        </div>
        <button class="action-button list active" title="List View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-list">
            <line x1="8" y1="6" x2="21" y2="6" />
            <line x1="8" y1="12" x2="21" y2="12" />
            <line x1="8" y1="18" x2="21" y2="18" />
            <line x1="3" y1="6" x2="3.01" y2="6" />
            <line x1="3" y1="12" x2="3.01" y2="12" />
            <line x1="3" y1="18" x2="3.01" y2="18" />
          </svg>
        </button>
        <button class="action-button grid" title="Grid View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-grid">
            <rect x="3" y="3" width="7" height="7" />
            <rect x="14" y="3" width="7" height="7" />
            <rect x="14" y="14" width="7" height="7" />
            <rect x="3" y="14" width="7" height="7" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- <section class="ftco-section bg-light">
    <div class="container">
      <div class="row d-flex"> -->
  <div class="products-area-wrapper tableView">
    <div class="products-header">
      <div class="product-cell category">Company</div>
      <div class="product-cell status-cell">Address</div>
      <div class="product-cell sales">Contact Info</div>
    </div>
    <?php
    $sql = "SELECT * FROM `tblcompany`";
    $mydb->setQuery($sql);
    $comp = $mydb->loadResultList();

    foreach ($comp as $company) {
      ?>
      <!-- <div class="product-cell category"><span class="cell-label">Company:
        </span>
        <?php //echo web_root . 'index.php?q=hiring&search=' . $company->COMPANYNAME; ?>
      </div> -->
      <div class="products-row">
        <div class="product-cell category"><span class="cell-label">Company:
          </span><a href="<?php echo web_root . 'index.php?q=hiring&search=' . $company->COMPANYNAME; ?>">
            <?php echo $company->COMPANYNAME; ?></a>
        </div>
        <div class="product-cell status-cell">
          <span class="cell-label">Address:</span>
          <?php echo $company->COMPANYADDRESS; ?>
        </div>
        <div class="product-cell sales">
          <span class="cell-label">Contact Info:
          </span>
          <?php echo $company->COMPANYCONTACTNO; ?>
        </div>
      </div>
    <?php } ?>

  </div>
</div>
</div>
</div>
</div>
</div>
<script src="Styles/grid.js"></script>
<script src="Table/script.js"></script>
<script src="Table/body.js"></script>