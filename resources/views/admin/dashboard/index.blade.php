@extends('layouts.admin')

@section('content')
  <div class="element-wrapper">
    <h6 class="element-header">
      Sales Dashboard
    </h6>
    <div class="element-content">
      <div class="row">
        <div class="col-sm-4 col-xxxl-3">
          <a class="element-box el-tablo" href="#">
            <div class="label">
              Products Sold
            </div>
            <div class="value">
              57
            </div>
            <div class="trending trending-up-basic">
              <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
            </div>
          </a>
        </div>
        <div class="col-sm-4 col-xxxl-3">
          <a class="element-box el-tablo" href="#">
            <div class="label">
              Gross Profit
            </div>
            <div class="value">
              $457
            </div>
            <div class="trending trending-down-basic">
              <span>12%</span><i class="os-icon os-icon-arrow-down"></i>
            </div>
          </a>
        </div>
        <div class="col-sm-4 col-xxxl-3">
          <a class="element-box el-tablo" href="#">
            <div class="label">
              New Customers
            </div>
            <div class="value">
              125
            </div>
            <div class="trending trending-down-basic">
              <span>9%</span><i class="os-icon os-icon-arrow-down"></i>
            </div>
          </a>
        </div>
        <div class="d-none d-xxxl-block col-xxxl-3">
          <a class="element-box el-tablo" href="#">
            <div class="label">
              Refunds Processed
            </div>
            <div class="value">
              $294
            </div>
            <div class="trending trending-up-basic">
              <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection