@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cart baby</div>
                <div class="row">

                  {{ Cart::count() }}
                </div>

                <div class="row">
<hr>
                </div>

                <div class="row">
                  <table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Subtotal</th>
        </tr>
    </thead>

    <tbody>

      <?php foreach(Cart::content() as $row) :?>

          <tr>
              <td>
                  <p><strong><?php echo $row->name; ?></strong></p>
                  <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
              </td>
              <td><input type="text" value="<?php echo $row->qty; ?>"></td>
              <td>$<?php echo $row->price; ?></td>
              <td>$<?php echo $row->total; ?></td>
          </tr>

      <?php endforeach;?>

    </tbody>
    
    <tfoot>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td>Subtotal</td>
        <td><?php echo Cart::subtotal(); ?></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td>Tax</td>
        <td><?php echo Cart::tax(); ?></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td>Total</td>
        <td><?php echo Cart::total(); ?></td>
      </tr>
    </tfoot>
</table>
                </div>
    
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                      <div class="row">
                        @if(Session::has('message'))
                        Hay mensaje
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif

                      </div>

                    You are logged in (HOME)!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

