<div class="main">

    <header>
        <div class="top-header">
            <img class="wow-logo" src="https://admin.octalsol.com/build/assets/logo-51416f02.png" alt="wow-logo" />
            <div class="top-header-list">
                <h1>WORK ORDER</h1>
                <ul>
                    <li>
                        <p>W.O. # :</p>
                        <div class="data-row">[{{$wo->id}}]</div>
                    </li>
                    <li>
                        <p>W.O. Date :</p>
                        <div class="data-row">{{$wo->wo_date}}</div>
                    </li>
                    <li>
                        <p>Return Date :</p>
                        <div class="data-row">{{$wo->wo_return_date}}</div>
                    </li>
                </ul>
            </div> 
        </div>
        <div class="bottom-header">
            <div class='bottom-header-contact'>
                <p>260300 Writing Creek Cres Unit # E-18, Balzac,</p>
                <p>[Calgary, T4A 0G3]</p>
                <p>Phone: 403.452.9892</p>
                <p>http://www.wowerides.ca/</p>
            </div>
            <ul class="bottom-header-list">
                <li>
                    <p>Customer Name: </p>
                    <div class="data-row">{{$wo->wo_customer_name}}</div>
                </li>
                <li>
                    <p>Bike Brand: </p>
                    <div class="data-row">{{$wo->wo_bike_brand}}</div>
                </li>
                <li>
                    <p>Bike Model:</p>
                    <div class="data-row">{{$wo->wo_bike_model}}</div>
                </li>
            </ul>
        </div>
    </header>

    <section class="main-body">

        <!-- JOB Table  -->
        <table class="first-table">
            <tr>
                <th>JOB</th>
                <th>BILL TO</th>
            </tr>
            <tr>
                <td>Change tire and tube</td>
                <td>
                    <li>
                        <p>Customer Name:</p>
                        <div class="data-row">{{$wo->billing_address->wo_addr_customer_name ?? '-'}}</div>
                    </li>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <li>
                        <p>[Street Address]</p>
                        <div class="data-row">{{$wo->billing_address->wo_addr_str_address ?? '-'}}</div>
                    </li>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <li>
                        <p>[City, ST ZIP]</p>
                        <div class="data-row">
                            {{$wo->billing_address->wo_addr_city ?? '-'}},
                            {{$wo->billing_address->wo_addr_state ?? '-'}},
                            {{$wo->billing_address->wo_addr_zipcode ?? '-'}}
                        </div>
                    </li>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <li>
                        <p>[Phone]</p>
                        <div class="data-row">{{$wo->billing_address->wo_addr_phone ?? '-'}}</div>
                    </li>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <li>
                        <p>Email Address</p>
                        <div class="data-row">{{$wo->billing_address->wo_addr_email ?? '-'}}</div>
                    </li>
                </td>
            </tr>
        </table>

        <!-- SERVICE and LABOR  Table -->
        <table class="service-table">
            <tr>
                <th>SERVICE and LABOR</th>
                <th>Hours</th>
                <th>Rate ($/hr)</th>
                <th>Line Total</th>
            </tr>
            <tr>
                <td>Lahour charges</td>
                <td>3</td>
                <td>50.00</td>
                <td>150.00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>3</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>4</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
                <td>5</td>
                <td>5</td>
                <td>5</td>
            </tr>
        </table>

        <ul class="bottom-table-list">
            <li>
                <p>SUBTOTAL</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
            <li>
                <p>DISCOUNT</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
            <li>
                <p>TOTAL</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
            <li>
                <p>TAX RATE</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
            <li>
                <p>TAX A</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
            <li>
                <p>TOTAL</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
        </ul>

        <!-- PARTS and MATERIALS Table -->
        <table class="parts-table">
            <tr>
                <th>PARTS and MATERIALS</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Line Total</th>
            </tr>
            <tr>
                <td>Tire 10/2.5</td>
                <td>2</td>
                <td>20.00</td>
                <td>40.00</td>
            </tr>
            <tr>
                <td>Tube 10/2.5</td>
                <td>2</td>
                <td>15.00</td>
                <td>30.00</td>
            </tr>
            <tr>
                <td>3</td>
                <td>3</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>4</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
                <td>5</td>
                <td>5</td>
                <td>5</td>
            </tr>
        </table>

        <ul class="bottom-table-list">
            <li>
                <p>SUBTOTAL</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
            <li>
                <p>DISCOUNT</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
            <li>
                <p>TOTAL</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
            <li>
                <p>TAX RATE</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
            <li>
                <p>TAX A</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
            <li>
                <p>TOTAL</p>
                <div class="data-row"><span>$</span><span>150.00</span></div>
            </li>
        </ul>

    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-sign">
                <div>
                    <p>Customer Signature:</p>
                    <hr />
                </div>
            </div>
            <div class="footer-date">
                <div>
                    <p>Completed Date:</p>
                    <hr />
                </div>
                <div>
                    <p>Date:</p>
                    <hr />
                </div>
            </div>
        </div>
        <h5>Thank You For Your Business!</h5>
    </footer>
</div>