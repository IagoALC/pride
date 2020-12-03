@extends('dashboard.master.master')

@section('dashboard-content')
    <div class="col-lg-8">
        <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
            <div class="py-2 p-md-3">
                <!-- Title + Filters-->
                <div class="d-sm-flex align-items-center justify-content-between pb-2">
                    <h1 class="h3 mb-3 text-center text-sm-left">Histórico de consultas</h1>
                    <div class="d-flex align-items-center mb-3">
                        <label class="text-nowrap pr-1 mr-2 mb-0">Ordenar consultas</label>
                        <select class="form-control custom-select custom-select-sm">
                            <option>Todas</option>
                            <option>Solicitada</option>
                            <option>Confirmada</option>
                            <option>Realizada</option>
                            <option>Cancelada</option>
                        </select>
                    </div>
                </div>
                <!-- Accordion with orders-->
                <div class="accordion" id="orders-accordion">
                    <!-- Order-->
                    <div class="card">
                        <div class="card-header">
                            <div class="accordion-heading"><a
                                        class="d-flex flex-wrap align-items-center justify-content-between pr-4 collapsed"
                                        href="#order-1" role="button" data-toggle="collapse"
                                        aria-expanded="false" aria-controls="order-1">
                                    <div class="font-size-sm font-weight-medium text-nowrap my-1 mr-2"><i
                                                class="fe-hash font-size-base mr-1"></i><span
                                                class="d-inline-block align-middle">34VB5540K83</span></div>
                                    <div class="text-nowrap text-body font-size-sm font-weight-normal my-1 mr-2">
                                        <i class="fe-clock text-muted mr-1"></i>Aug 04, 2020
                                    </div>
                                    <div class="bg-faded-info text-info font-size-xs font-weight-medium py-1 px-3 rounded-sm my-1 mr-2">
                                        In progress
                                    </div>
                                    <div class="text-body font-size-sm font-weight-medium my-1">$187.65</div>
                                </a></div>
                        </div>
                        <div class="collapse" id="order-1" data-parent="#orders-accordion" style="">
                            <div class="card-body pt-4 border-top bg-secondary">
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                    <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3"><a
                                                class="d-table mx-auto" href="#"><img class="d-block rounded"
                                                                                      width="105"
                                                                                      src="img/dashboard/orders/01.jpg"
                                                                                      alt="Thumbnail"></a>
                                        <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Mom High Waist
                                                    Shorts</a></h5>
                                            <div><span class="text-muted mr-1">Size:</span>XS</div>
                                            <div><span class="text-muted mr-1">Color:</span>Blue</div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                        <div class="text-muted">Quantity:</div>
                                        <div class="font-weight-medium">1</div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2">
                                        <div class="text-muted">Subtotal:</div>
                                        <div class="font-weight-medium">$49.50</div>
                                    </div>
                                </div>
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                    <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3"><a
                                                class="d-table mx-auto" href="#"><img class="d-block rounded"
                                                                                      width="105"
                                                                                      src="img/dashboard/orders/02.jpg"
                                                                                      alt="Thumbnail"></a>
                                        <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Cotton T-shirt
                                                    with Print</a></h5>
                                            <div><span class="text-muted mr-1">Size:</span>XS</div>
                                            <div><span class="text-muted mr-1">Color:</span>Black / Printed
                                            </div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                        <div class="text-muted">Quantity:</div>
                                        <div class="font-weight-medium">1</div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2">
                                        <div class="text-muted">Subtotal:</div>
                                        <div class="font-weight-medium">$17.99</div>
                                    </div>
                                </div>
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                    <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3"><a
                                                class="d-table mx-auto" href="#"><img class="d-block rounded"
                                                                                      width="105"
                                                                                      src="img/dashboard/orders/03.jpg"
                                                                                      alt="Thumbnail"></a>
                                        <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Floral Printed
                                                    Sneakers</a></h5>
                                            <div><span class="text-muted mr-1">Size:</span>8.5</div>
                                            <div><span class="text-muted mr-1">Color:</span>Floral print</div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                        <div class="text-muted">Quantity:</div>
                                        <div class="font-weight-medium">1</div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2">
                                        <div class="text-muted">Subtotal:</div>
                                        <div class="font-weight-medium">$86.00</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Subtotal:</span><span
                                                class="font-weight-medium">$153.49</span></div>
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Shipping:</span><span
                                                class="font-weight-medium">$27.31</span></div>
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Tax:</span><span
                                                class="font-weight-medium">$6.85</span></div>
                                    <div class="font-size-sm my-2"><span
                                                class="text-muted mr-1">Total:</span><span
                                                class="font-weight-medium">$187.65</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Order-->
                    <div class="card">
                        <div class="card-header">
                            <div class="accordion-heading"><a
                                        class="collapsed d-flex flex-wrap align-items-center justify-content-between pr-4"
                                        href="#order-2" role="button" data-toggle="collapse"
                                        aria-expanded="true" aria-controls="order-2">
                                    <div class="font-size-sm font-weight-medium text-nowrap my-1 mr-2"><i
                                                class="fe-hash font-size-base mr-1"></i><span
                                                class="d-inline-block align-middle">47H76G09F33</span></div>
                                    <div class="text-nowrap text-body font-size-sm font-weight-normal my-1 mr-2">
                                        <i class="fe-clock text-muted mr-1"></i>Jul 30, 2020
                                    </div>
                                    <div class="bg-faded-info text-info font-size-xs font-weight-medium py-1 px-3 rounded-sm my-1 mr-2">
                                        In progress
                                    </div>
                                    <div class="text-body font-size-sm font-weight-medium my-1">$789.34</div>
                                </a></div>
                        </div>
                        <div class="collapse" id="order-2" data-parent="#orders-accordion">
                            <div class="card-body pt-4 border-top bg-secondary">
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                    <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3"><a
                                                class="d-table mx-auto" href="#"><img class="d-block rounded"
                                                                                      width="105"
                                                                                      src="img/dashboard/orders/04.jpg"
                                                                                      alt="Thumbnail"></a>
                                        <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Smart Watch
                                                    Series 5</a></h5>
                                            <div><span class="text-muted mr-1">Screen:</span>42"</div>
                                            <div><span class="text-muted mr-1">Band color:</span>White</div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                        <div class="text-muted">Quantity:</div>
                                        <div class="font-weight-medium">1</div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2">
                                        <div class="text-muted">Subtotal:</div>
                                        <div class="font-weight-medium">$49.50</div>
                                    </div>
                                </div>
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                    <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3"><a
                                                class="d-table mx-auto" href="#"><img class="d-block rounded"
                                                                                      width="105"
                                                                                      src="img/dashboard/orders/05.jpg"
                                                                                      alt="Thumbnail"></a>
                                        <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Sport Running
                                                    Sneakers</a></h5>
                                            <div><span class="text-muted mr-1">Size:</span>10.5</div>
                                            <div><span class="text-muted mr-1">Color:</span>White / Orange</div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                        <div class="text-muted">Quantity:</div>
                                        <div class="font-weight-medium">1</div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2">
                                        <div class="text-muted">Subtotal:</div>
                                        <div class="font-weight-medium">$145.00</div>
                                    </div>
                                </div>
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                    <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3"><a
                                                class="d-table mx-auto" href="#"><img class="d-block rounded"
                                                                                      width="105"
                                                                                      src="img/dashboard/orders/06.jpg"
                                                                                      alt="Thumbnail"></a>
                                        <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Wireless
                                                    Bluetooth Headset</a></h5>
                                            <div><span class="text-muted mr-1">Brand:</span>Beats</div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                        <div class="text-muted">Quantity:</div>
                                        <div class="font-weight-medium">1</div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2">
                                        <div class="text-muted">Subtotal:</div>
                                        <div class="font-weight-medium">$258.00</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Subtotal:</span><span
                                                class="font-weight-medium">$776.99</span></div>
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Shipping:</span><span
                                                class="font-weight-medium">$12.35</span></div>
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Tax:</span><span
                                                class="font-weight-medium">—</span></div>
                                    <div class="font-size-sm my-2"><span
                                                class="text-muted mr-1">Total:</span><span
                                                class="font-weight-medium">$789.34</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Order-->
                    <div class="card">
                        <div class="card-header">
                            <div class="accordion-heading"><a
                                        class="collapsed d-flex flex-wrap align-items-center justify-content-between pr-4"
                                        href="#order-3" role="button" data-toggle="collapse"
                                        aria-expanded="true" aria-controls="order-3">
                                    <div class="font-size-sm font-weight-medium text-nowrap my-1 mr-2"><i
                                                class="fe-hash font-size-base mr-1"></i><span
                                                class="d-inline-block align-middle">78A6431D409</span></div>
                                    <div class="text-nowrap text-body font-size-sm font-weight-normal my-1 mr-2">
                                        <i class="fe-clock text-muted mr-1"></i>Jul 16, 2020
                                    </div>
                                    <div class="bg-faded-danger text-danger font-size-xs font-weight-medium py-1 px-3 rounded-sm my-1 mr-2">
                                        Canceled
                                    </div>
                                    <div class="text-body font-size-sm font-weight-medium my-1">$215.40</div>
                                </a></div>
                        </div>
                        <div class="collapse" id="order-3" data-parent="#orders-accordion">
                            <div class="card-body pt-4 border-top bg-secondary">
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                    <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3"><a
                                                class="d-table mx-auto" href="#"><img class="d-block rounded"
                                                                                      width="105"
                                                                                      src="img/dashboard/orders/07.jpg"
                                                                                      alt="Thumbnail"></a>
                                        <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">360 Degrees
                                                    Camera</a></h5>
                                            <div><span class="text-muted mr-1">Category:</span>Electronics</div>
                                            <div><span class="text-muted mr-1">Color:</span>White</div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                        <div class="text-muted">Quantity:</div>
                                        <div class="font-weight-medium">1</div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2">
                                        <div class="text-muted">Subtotal:</div>
                                        <div class="font-weight-medium">$110.00</div>
                                    </div>
                                </div>
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                    <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3"><a
                                                class="d-table mx-auto" href="#"><img class="d-block rounded"
                                                                                      width="105"
                                                                                      src="img/dashboard/orders/08.jpg"
                                                                                      alt="Thumbnail"></a>
                                        <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Vintage Travel
                                                    Backpack</a></h5>
                                            <div><span class="text-muted mr-1">Color:</span>Green / Brown</div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                        <div class="text-muted">Quantity:</div>
                                        <div class="font-weight-medium">1</div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2">
                                        <div class="text-muted">Subtotal:</div>
                                        <div class="font-weight-medium">$81.45</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Subtotal:</span><span
                                                class="font-weight-medium">$191.45</span></div>
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Shipping:</span><span
                                                class="font-weight-medium">$15.20</span></div>
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Tax:</span><span
                                                class="font-weight-medium">$8.75</span></div>
                                    <div class="font-size-sm my-2"><span
                                                class="text-muted mr-1">Total:</span><span
                                                class="font-weight-medium">$215.40</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Order-->
                    <div class="card">
                        <div class="card-header">
                            <div class="accordion-heading"><a
                                        class="collapsed d-flex flex-wrap align-items-center justify-content-between pr-4"
                                        href="#order-4" role="button" data-toggle="collapse"
                                        aria-expanded="true" aria-controls="order-4">
                                    <div class="font-size-sm font-weight-medium text-nowrap my-1 mr-2"><i
                                                class="fe-hash font-size-base mr-1"></i><span
                                                class="d-inline-block align-middle">112P45A90V2</span></div>
                                    <div class="text-nowrap text-body font-size-sm font-weight-normal my-1 mr-2">
                                        <i class="fe-clock text-muted mr-1"></i>May 28, 2020
                                    </div>
                                    <div class="bg-faded-success text-success font-size-xs font-weight-medium py-1 px-3 rounded-sm my-1 mr-2">
                                        Delivered
                                    </div>
                                    <div class="text-body font-size-sm font-weight-medium my-1">$94.75</div>
                                </a></div>
                        </div>
                        <div class="collapse" id="order-4" data-parent="#orders-accordion">
                            <div class="card-body pt-4 border-top bg-secondary">
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                    <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3"><a
                                                class="d-table mx-auto" href="#"><img class="d-block rounded"
                                                                                      width="105"
                                                                                      src="img/dashboard/orders/09.jpg"
                                                                                      alt="Thumbnail"></a>
                                        <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Sport Running
                                                    Sneakers</a></h5>
                                            <div><span class="text-muted mr-1">Size:</span>11</div>
                                            <div><span class="text-muted mr-1">Color:</span>Gray</div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                        <div class="text-muted">Quantity:</div>
                                        <div class="font-weight-medium">1</div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2">
                                        <div class="text-muted">Subtotal:</div>
                                        <div class="font-weight-medium">$82.00</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Subtotal:</span><span
                                                class="font-weight-medium">$82.00</span></div>
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Shipping:</span><span
                                                class="font-weight-medium">$9.00</span></div>
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Tax:</span><span
                                                class="font-weight-medium">$3.75</span></div>
                                    <div class="font-size-sm my-2"><span
                                                class="text-muted mr-1">Total:</span><span
                                                class="font-weight-medium">$94.75</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Order-->
                    <div class="card">
                        <div class="card-header">
                            <div class="accordion-heading"><a
                                        class="collapsed d-flex flex-wrap align-items-center justify-content-between pr-4"
                                        href="#order-5" role="button" data-toggle="collapse"
                                        aria-expanded="true" aria-controls="order-5">
                                    <div class="font-size-sm font-weight-medium text-nowrap my-1 mr-2"><i
                                                class="fe-hash font-size-base mr-1"></i><span
                                                class="d-inline-block align-middle">502TR872W2</span></div>
                                    <div class="text-nowrap text-body font-size-sm font-weight-normal my-1 mr-2">
                                        <i class="fe-clock text-muted mr-1"></i>Apr 05, 2020
                                    </div>
                                    <div class="bg-faded-success text-success font-size-xs font-weight-medium py-1 px-3 rounded-sm my-1 mr-2">
                                        Delivered
                                    </div>
                                    <div class="text-body font-size-sm font-weight-medium my-1">$128.00</div>
                                </a></div>
                        </div>
                        <div class="collapse" id="order-5" data-parent="#orders-accordion">
                            <div class="card-body pt-4 border-top bg-secondary">
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                    <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3"><a
                                                class="d-table mx-auto" href="#"><img class="d-block rounded"
                                                                                      width="105"
                                                                                      src="img/dashboard/orders/10.jpg"
                                                                                      alt="Thumbnail"></a>
                                        <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Military
                                                    Cotton Cap</a></h5>
                                            <div><span class="text-muted mr-1">Category:</span>Accessories</div>
                                            <div><span class="text-muted mr-1">Color:</span>Military</div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                        <div class="text-muted">Quantity:</div>
                                        <div class="font-weight-medium">1</div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2">
                                        <div class="text-muted">Subtotal:</div>
                                        <div class="font-weight-medium">$16.00</div>
                                    </div>
                                </div>
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                    <div class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3"><a
                                                class="d-table mx-auto" href="#"><img class="d-block rounded"
                                                                                      width="105"
                                                                                      src="img/dashboard/orders/11.jpg"
                                                                                      alt="Thumbnail"></a>
                                        <div class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Women
                                                    Colorblock Sneakers</a></h5>
                                            <div><span class="text-muted mr-1">Size:</span>8.5</div>
                                        </div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                        <div class="text-muted">Quantity:</div>
                                        <div class="font-weight-medium">1</div>
                                    </div>
                                    <div class="font-size-sm text-center pt-2">
                                        <div class="text-muted">Subtotal:</div>
                                        <div class="font-weight-medium">$102.00</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Subtotal:</span><span
                                                class="font-weight-medium">$118.00</span></div>
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Shipping:</span><span
                                                class="font-weight-medium">$7.50</span></div>
                                    <div class="font-size-sm my-2 mr-2"><span
                                                class="text-muted mr-1">Tax:</span><span
                                                class="font-weight-medium">$2.50</span></div>
                                    <div class="font-size-sm my-2"><span
                                                class="text-muted mr-1">Total:</span><span
                                                class="font-weight-medium">$128.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination-->
                <nav class="d-md-flex justify-content-between align-items-center text-center text-md-left pt-grid-gutter">
                    <div class="d-md-flex align-items-center w-100"><span
                                class="font-size-sm text-muted mr-md-3">Mostrando 5 de 15 consultas</span>
                        <div class="progress w-100 my-3 mx-auto mx-md-0" style="max-width: 10rem; height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 38%;" aria-valuenow="38"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <button class="btn btn-outline-primary btn-sm" type="button">Carregar mais consultas</button>
                </nav>
            </div>
        </div>
    </div>
@endsection