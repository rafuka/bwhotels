<header styles="background-color:blue;width:100%; ">
	<h1>New Order Placed!</h1>
</header> 
<h2>Hotel: {{ $order->hotel->name }}</h2>
<p>Address: {{ $order->hotel->address }}</p>
<h2>Order Information:</h2>
<ul>
	<li>Client Name: {{ $order->client_name }}</li>
	<li>Client ID: {{ $order->id_num }}</li>
	<li>Number of Bags: {{ $order->lug_num }}</li>
	<li>Terminal: {{ $order->terminal }}</li>
	<li>Time: {{ $order->time }} </li>

</ul>

