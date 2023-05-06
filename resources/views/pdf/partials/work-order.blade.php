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
                <p><b>Phone:</b> 403.452.9892</p>
                <p><b>Website:</b> wowerides.ca</p>
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
                <td>{{$wo->wo_title}}</td>
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
            @foreach ($wo->items->where('wo_item_category_id',1) as $item)
            <tr>
                <td>{{$item->wo_item_name}}</td>
                <td>{{$item->wo_item_hours}}</td>
                <td>{{$item->wo_item_rate}}</td>
                <td>{{$item->wo_item_line_total}}</td>
            </tr>
            @endforeach
        </table>

        <ul class="bottom-table-list">
            <li>
                <p>SUBTOTAL</p>
                <div class="data-row"><span>$</span>
                    <span>
                        {{calculation($wo->id,1)['subtotal']}}
                    </span>
                </div>
            </li>
            <li>
                <p>DISCOUNT</p>
                <div class="data-row"><span>$</span>
                    <span>
                        {{calculation($wo->id,1)['discount']}}
                    </span>
                </div>
            </li>
            <li>
                <p>TAX RATE</p>
                <div class="data-row"><span>$</span>
                    <span>
                        {{calculation($wo->id,1)['tax_rate']}}%
                    </span>
                </div>
            </li>
            <li>
                <p>TAX AMOUNT</p>
                <div class="data-row"><span>$</span>
                    <span>
                        {{calculation($wo->id,1)['tax_amount']}}
                    </span>
                </div>
            </li>
            <li>
                <p>TOTAL</p>
                <div class="data-row"><span>$</span>
                    <span>
                        {{calculation($wo->id,1)['total']}}
                    </span>
                </div>
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
            @foreach ($wo->items->where('wo_item_category_id',2) as $item)
            <tr>
                <td>{{$item->wo_item_name}}</td>
                <td>{{$item->wo_item_hours}}</td>
                <td>{{$item->wo_item_rate}}</td>
                <td>
                    {{number_format((float)$wo->wo_item_line_total, 2, '.', '')}}
                </td>
            </tr>
            @endforeach
        </table>

        <ul class="bottom-table-list">
            <li>
                <p>SUBTOTAL</p>
                <div class="data-row"><span>$</span>
                    <span>
                        {{calculation($wo->id,2)['subtotal']}}
                    </span>
                </div>
            </li>
            <li>
                <p>DISCOUNT</p>
                <div class="data-row"><span>$</span>
                    <span>
                        {{calculation($wo->id,2)['discount']}}
                    </span>
                </div>
            </li>
            <li>
                <p>TAX RATE</p>
                <div class="data-row"><span>$</span>
                    <span>
                        {{calculation($wo->id,2)['tax_rate']}}%
                    </span>
                </div>
            </li>
            <li>
                <p>TAX AMOUNT</p>
                <div class="data-row"><span>$</span>
                    <span>
                        {{calculation($wo->id,2)['tax_amount']}}
                    </span>
                </div>
            </li>
            <li>
                <p>TOTAL</p>
                <div class="data-row"><span>$</span>
                    <span>
                        {{calculation($wo->id,2)['total']}}
                    </span>
                </div>
            </li>
            <li>
                <p>GRAND TOTAL</p>
                <div class="data-row"><span>$</span>
                    <span>
                        {{format_number($wo->wo_grand_total)}}
                    </span>
                </div>
            </li>
        </ul>

    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-sign">
                <div>
                    <p>Customer Signature: __________________________</p>
                </div>
            </div>
            <div class="footer-date">
                <div>
                    <p>Completed Date: _____________________________</p>
                </div>
                <div>
                    <p>Date: _____________________________</p>
                </div>
            </div>
        </div>
        <h5>Thank You For Your Business!</h5>
    </footer>
</div>