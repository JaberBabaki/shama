<div class="page-container">
  <div class="page-content">
    <div class="sidebar sidebar-main">
      <div class="sidebar-content">
        <div class="sidebar-user">
          <div class="category-content">
            <div class="media">
              <a href="#" class="media-left"><img src="/asset/image/logo/placeholder.jpg" class="img-circle img-sm"
                                                  alt=""></a>

              <div class="media-body">
                <span class="media-heading text-semibold"><?php if (!isGuest()) {
                    echo $_SESSION['email'];
                  } ?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar-category sidebar-category-visible">
          <div class="category-content no-padding">
            <ul class="navigation navigation-main navigation-accordion">
              <li class="navigation-header"><span>بخش اصلی</span> <i class="icon-menu" title="Main pages"></i></li>
              <li><a href='/user3/dashboard'><i class="icon-home4"></i> <span>داشبورد</span></a>
              </li>
              <li><a href="informationCenter"><i class="icon-people"></i> <span>اطلاعات مرکز</span></a>
              </li>
              <li><a href="course"><i class="icon-stack2"></i> <span>تعریف دوره ها</span></a></li>
              <li class="active"><a href='/user3/registerPsych'><i class="icon-stack"></i>
                  <span>ثبت  درمانگر</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="page-header page-header-default">
        <div class="page-header-content">
          <div class="page-title">
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"> اطلاعات درمانگر</span>
            </h4>
          </div>
        </div>
        <div class="breadcrumb-line" style="padding-left: 10px;padding-bottom: 10px;padding-top: 10px;"><a
            class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
          <a href="/user3/informationPsych" type="submit" class="btn btn-primary">تعریف درمانگر جدید<i
              class="icon-plus2 position-right"></i>
          </a>
          <a href="/user3/listPsych" type="submit" class="btn btn-primary">لیست درمانگر های این مرکز
            <iclass
            ="icon-list-ordered position-right"></i></a>
        </div>
      </div>
      <div class="page-header page-header-default">
        <div class="page-header-content">
        </div>
      </div>
      <div class="content">
        <div class="panel panel-flat">
          <div class="panel-heading">
            <h5 class="panel-title">لیست درمانگر های مرکز مشاوره<a class="heading-elements-toggle"><i
                  class="icon-more"></i></a></h5>

            <div class="heading-elements">
              <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
              </ul>
            </div>
          </div>

          <div class="panel-body tac">
            لیست درمانگر های مرکز بر اساس حروف الفبا مرتب شده است ، میتوانید از با انتخاب فیلتر مورد نظر جستجو بر اساس
            فیلتر داشته باشید.
          </div>

          <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
            <div class="datatable-header">
              <div class="row">
                <div id="DataTables_Table_0_filter" class="dataTables_filter col-md-3">
                <span>Filter:</span>
              </div>
                <div id="DataTables_Table_0_search" class="dataTables_filter col-md-6">
                <label><input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_0"></label>
              </div>
                <div id="DataTables_Table_0_length" class="dataTables_length col-md-3" ><label><span>Show:</span> <select
                    name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                    class="select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select><span class="select2 select2-container select2-container--default" dir="rtl"
                                 style="width: auto;"><span class="selection"><span
                        class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                        aria-expanded="false" tabindex="0"
                        aria-labelledby="select2-DataTables_Table_0_length-0h-container"><span
                          class="select2-selection__rendered" id="select2-DataTables_Table_0_length-0h-container"
                          title="10">10</span><span class="select2-selection__arrow" role="presentation"><b
                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                                                               aria-hidden="true"></span></span></label>
              </div>
              </div>
            </div>
            <div class="datatable-scroll">
              <table class="table datatable-selection-single dataTable no-footer" id="DataTables_Table_0" role="grid"
                     aria-describedby="DataTables_Table_0_info">
                <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                      aria-sort="ascending" aria-label="Name: activate to sort column descending">Name
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                      aria-label="Position: activate to sort column ascending">Position
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                      aria-label="Age: activate to sort column ascending">Age
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                      aria-label="Start date: activate to sort column ascending">Start date
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                      aria-label="Salary: activate to sort column ascending">Salary
                  </th>
                  <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions"
                      style="width: 100px;">Actions
                  </th>
                </tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td class="sorting_1">Airi Satou</td>
                  <td>Accountant</td>
                  <td>33</td>
                  <td><a href="#">2008/11/28</a></td>
                  <td><span class="label label-danger">$162,700</span></td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                          <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr role="row" class="even">
                  <td class="sorting_1">Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>66</td>
                  <td><a href="#">2009/01/12</a></td>
                  <td><span class="label label-default">$86,000</span></td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                          <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr role="row" class="odd">
                  <td class="sorting_1">Brielle Williamson</td>
                  <td>Integration Specialist</td>
                  <td>61</td>
                  <td><a href="#">2012/12/02</a></td>
                  <td><span class="label label-info">$372,000</span></td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                          <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr role="row" class="even">
                  <td class="sorting_1">Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>22</td>
                  <td><a href="#">2012/03/29</a></td>
                  <td><span class="label label-success">$433,060</span></td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                          <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr role="row" class="odd">
                  <td class="sorting_1">Charde Marshall</td>
                  <td>Regional Director</td>
                  <td>36</td>
                  <td><a href="#">2008/10/16</a></td>
                  <td><span class="label label-success">$470,600</span></td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                          <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr role="row" class="even">
                  <td class="sorting_1">Colleen Hurst</td>
                  <td>Javascript Developer</td>
                  <td>39</td>
                  <td><a href="#">2009/09/15</a></td>
                  <td><span class="label label-success">$405,500</span></td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                          <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr role="row" class="odd">
                  <td class="sorting_1">Garrett Winters</td>
                  <td>Accountant</td>
                  <td>63</td>
                  <td><a href="#">2011/07/25</a></td>
                  <td><span class="label label-danger">$170,750</span></td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                          <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr role="row" class="even">
                  <td class="sorting_1">Haley Kennedy</td>
                  <td>Senior Marketing Designer</td>
                  <td>43</td>
                  <td><a href="#">2012/12/18</a></td>
                  <td><span class="label label-danger">$113,500</span></td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown dropup">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                          <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr role="row" class="odd">
                  <td class="sorting_1">Herrod Chandler</td>
                  <td>Sales Assistant</td>
                  <td>59</td>
                  <td><a href="#">2012/08/06</a></td>
                  <td><span class="label label-danger">$137,500</span></td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown dropup">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                          <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr role="row" class="even">
                  <td class="sorting_1">Jena Gaines</td>
                  <td>Office Manager</td>
                  <td>30</td>
                  <td><a href="#">2008/12/19</a></td>
                  <td><span class="label label-danger">$90,560</span></td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown dropup">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                          <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="datatable-footer">
              <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10
                of 15 entries
              </div>
              <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a
                  class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0"
                  tabindex="0" id="DataTables_Table_0_previous">→</a><span><a class="paginate_button current"
                                                                              aria-controls="DataTables_Table_0"
                                                                              data-dt-idx="1" tabindex="0">1</a><a
                    class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2"
                    tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_0"
                                                data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">←</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
