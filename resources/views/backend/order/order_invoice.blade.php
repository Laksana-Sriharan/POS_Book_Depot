<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: grey;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: grey;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
      
        <h4 style="color: red; font-size: 20px;"><strong> Poobalasingham Book Depot </strong></h4>
        </td>
        <td align="right">
            <pre class="font" >
                Poobalasingham Book Depot
                202 , Sea street Colombo.11
                Sri Lanka. <br>
                Tel:- 2422321 , 2435713
                Fax - 2337313
                E-Mail Poobalasingham202@gmail.com <br>
                Web : http://www.poobalasingham.com <br>

            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;"></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
           <strong>Customer Name: </strong> {{ $order->customer->name }}  <br>
           <strong>Customer Email: </strong> {{ $order->customer->email }}   <br>
           <strong>Customer Phone: </strong> {{ $order->customer->phone }}   <br>

           <strong>Address: </strong> {{ $order->customer->address }} <br>  
        

         </p>
        </td>
        <td>
          <p class="font">
          <h3><span style="color: red;">Invoice:</span> # {{ $order->invoice_no }}  </h3>
            Order Date: {{ $order->order_date }} <br>
            Order Status:   {{ $order->order_status }} <br>
            Payment Status: {{ $order->payment_status }}  <br>
            Total Pay : {{ $order->pay }} <br>
            Total Due : {{ $order->due }} </span>

         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Products</h3>


  <table width="100%">
    <thead style="background-color: gray; color:#FFFFFF;">
      <tr class="font">
         <th>Image </th>
        <th>Product Name</th>
        <th>Product Code</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total(+Vat)</th>
      </tr>
    </thead>
    <tbody>

     @foreach($orderItem as $item)
      <tr class="font">
        <td align="center">
        <img src="{{ public_path($item->product->product_image) }} " height="50px;" width="50px;" alt="">
        </td>
        <td align="center"> {{ $item->product->product_name }} </td>


        <td align="center"> {{ $item->product->product_code }} </td>
        <td align="center"> {{ $item->quantity }} </td>



        <td align="center"> Rs . {{ $item->product->selling_price }} </td>
        <td align="center"> Rs . {{ $item->total }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
        <h2><span style="color: gray;">Subtotal:</span> Rs . {{ $order->total }} </h2>
<h2><span style="color: gray;">Total:</span> Rs . {{ $order->total }} </h2>
            {{-- <h2><span style="color: gray;">Full Payment PAID</h2> --}}
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Thankyou for purchasing......!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Authority Signature</h5>
    </div>
</body>
</html>