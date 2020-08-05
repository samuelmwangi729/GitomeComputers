<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $userDetails['FirstName'].'   '.$userDetails['LastName'] }} Invoice</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <style>
    /* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

body { box-sizing: border-box; height: 11in; margin: 0 auto;  padding: 0.5in; width: 7.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #e40101; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 95%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
article address.norm h4 {
	font-size: 125%;
	font-weight: bold;
}
article address.norm { float: left; font-size: 95%; font-style: normal; font-weight: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th:first-child {
	width:50px;
}
table.inventory th:nth-child(2) {
	width:300px;
}
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

table.sign {
	float: left;
	width: 220px;
}
table.sign img {
	width: 100%;
}
table.sign tr td {
	border-color: transparent;
}
@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
    .no-print, .no-print *
    {
        display: none !important;
    }
}

    </style>
</head>
<body>
    <!--the invoice start here-->
    <header>
        <h1>{{ config('app.name') }}<br> Invoice</h1>
        <address >
            @foreach (App\Contact::all() as $contact )
                      @if( $contact->Type=='Building')
                      <p><i class="fa fa-map-marker" style="color:blue"></i> &nbsp;{{ $contact->Address }}</p>
                      @elseif( $contact->Type=='Mobile')
                      <p><i class="fa fa-phone" style="color:red"></i>&nbsp;{{ $contact->Address }}</p>
                      @else
                      <p><i class="fa fa-envelope" style="color:purple"></i> &nbsp;{{ $contact->Address }}</p>
                      @endif
                  @endforeach
        </address>
        <span><img alt="it" src="{{ asset('images/logos/logo.jpg') }}" height="80px" style="border-radius:60px"></span>
    </header>
    <article>
        <h1>Recipient</h1>
        <address class="norm">
          
            <h4>  {{ $userDetails['FirstName'].'   '.$userDetails['LastName'] }}</h4>
            <p>{{$userDetails['Email']}} <br>
            <p>{!! $userDetails['Address'] !!} <br>
            <p> {{ $userDetails['Town'].' , '.$userDetails['County'] }} <br>
            <p> Phone: {{ $userDetails['Phone'] }}</p>
        </address>
        
        <table class="meta">
            <tr>
                <th><span >Invoice</span></th>
                <td><span ><span style="color:red;font-weight:bold">#</span> {{ $OrderId }}</span></td>
            </tr>
            <tr>
                <th><span >Date</span></th>
                <td><span >{{ now()->toFormattedDateString() }}</span></td>
            </tr>
            <tr>
                <th><span >Amount Due</span></th>
                <td><span id="prefix" style="color:Red;font-weight:bold">Kes</span><span> {{ $Total.'.00'}}</span></td>
            </tr>
        </table>
        <table class="inventory">
            <thead>
                <tr>
                    <th><span >S. No</span></th>
                    <th><span >Description</span></th>
                    <th><span >Qty</span></th>
                    <th><span >Rate Per Qty</span></th>
                    <th><span >Amount</span></th>
                </tr>
            </thead>
            <tbody>
               @foreach ($Cart as $cart)
                    <tr>
                        <td>
                            <span >
                                @for($i=1;$i<=count($Cart);$i++)
                                {{ $i }}
                                @endfor
                            </span>
                        </td>
                        <td>
                            <span >
                                {{ App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->ProductName }} <b>--</b>  {{  App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->ProductText }}
                            </span>
                        </td>
                        <td><span data-prefix>Pieces </span><span >{{ $cart->Qty }}</span></td>
                        <td><span >{{ App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->SellingPrice }}</span></td>
                        <td><span data-prefix>Kes</span><span>{{ App\Product::where('ProductId','=',$cart->ProductId)->get()->first()->SellingPrice * $cart->Qty }}</span></td>
                    </tr>                   
               @endforeach
            </tbody>
        </table>
        <table class="sign">
            <tr>
                <td><img src="{{ asset('images/logos/approved.jpg') }}" alt="{{ config('app.name') }}"></td>
            </tr>
        </table>

        <table class="balance">
            <tr>
                <th><span >Total</span></th>
                <td><span >Kes </span><span>{{ $Total }}</span></td>
            </tr>
        </table>
    </article>
    <aside>
        <h1><span >Additional Notes</span></h1>
        <div >
            <p>
               We offer 10 days warrant for goods bought from Us. We also perform deliveries to any part of the country. 
               For Any Queries,contact us for Assistance
            </p>
        </div>
        <div class="no-print" style="color:purple;font-weight:bold">
            <h1>Kindly Register to be able to Track Your Order</h1>
        </div>
    </aside>
    <div class="container pull-right">
        <span class="row" style="color:red;font-family:'monospace';font-size:10px;font-weight:bold;border:1px solid grey">Thank You For Placing An Order With Us. We Will Contact You Shortly</span>

    </div>
    <button class="btn btn-warning fa fa-backward pull-right no-print" onclick="window.open('{{ route('shop') }}','_parent')">Back To Shop</button>
    <button class="btn btn-success fa fa-print pull-right no-print" onclick="window.print()">Print</button>

    <!--End Invoice-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  @if(Session::has('success'))
      toastr.success("{{ Session::get('success') }}");
  @endif
  @if(Session::has('error'))
      toastr.error("{{ Session::get('error') }}");
  @endif
  @if(Session::has('info'))
      toastr.info("{{ Session::get('info') }}");
  @endif
</script>
</body>
</html>