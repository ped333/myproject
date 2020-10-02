<form method="POST" action="{{ url('/order-product') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}

    <input class="form-control" name="title" type="text" id="title" value="{{ isset($product->title) ? $product->title : ''}}" >
    
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($product->price) ? $product->price : ''}}" >
   
    <input class="form-control" name="cost" type="number" id="cost" value="{{ isset($product->cost) ? $product->cost : ''}}" >
    
    <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($product->photo) ? $product->photo : ''}}" >
    
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($product->quantity) ? $product->quantity : ''}}" >

 </form>  



