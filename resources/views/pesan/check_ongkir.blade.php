@extends('layouts.app2')
@section('content')

<br><br>
    <div class="box-body">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Service Name</th>
            <th>Price</th>
            <th>ETD (Estimates Days)</th>
          </tr>
          </thead>
          <tbody>
            @foreach($cost as $costs)
            <?php for($i=1; $i<count($costs["costs"]); $i++){ ?>
              <tr>
                <td>JNE <?php echo $costs["costs"][1]["service"] ?> </td>
                <td><?php echo $costs["costs"][1]["cost"][0]["value"] ?></td>
                <td><?php echo $costs["costs"][1]["cost"][0]["etd"] ?></td>
              </tr>
            <?php } ?>
            
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>

      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('check-out') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('toko') }}">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                    </ol>   
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fa-shopping-cart"></i> Check Out</h3>
                        @if(!empty($pesanan))
                        <p align="right">Order Date : {{ $pesanan->tanggal }}</p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Amount</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($pesanan_details as $pesanan_detail)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <img src="../images/{{ $pesanan_detail->barang->gambar }}" width="100" alt="...">
                                    </td>
                                    <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                    <td>{{ $pesanan_detail->jumlah }} item</td>
                                    <td align="right">Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                    <td align="right">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                    <td>
                                        <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <tr>
                                    <td colspan="5" align="right"><strong>Shipping :</strong></td>
                                    <td align="right"><strong>Rp. {{ number_format($costs["costs"][1]["cost"][0]["value"]) }}</strong></td>
                                </tr>
                                    <td colspan="5" align="right"><strong>Subtotal :</strong></td>
                                    <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga+$costs["costs"][1]["cost"][0]["value"]) }}</strong></td>
                                    <td>
                                        <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                            <i class="fa fa-shopping-cart"></i> Check Out
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
      

    {{-- <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3><i class="fa fa-shopping-cart"></i> Check Ongkir</h3>
                
                <form action="/check-ongkir" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="form-group-sm">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="">Provinsi Asal</label>
                                <select name="province_origin" class="form-control">
                                    <option value="">--Provinsi--</option>
                                    @foreach ($provinces as $province => $value)
                                    <option value="{{ $province }}"> {{ $value }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kota Asal</label>
                                <select name="city_origin" class="form-control">
                                    <option>--Kota--</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Provinsi Tujuan</label>
                                <select name="province_destination" class="form-control">
                                    <option value="">--Provinsi--</option>
                                    @foreach ($provinces as $province => $value)
                                    <option value="{{ $province }}"> {{ $value }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kota Tujuan</label>
                                <select name="city_destination" class="form-control">
                                    <option>--Kota--</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kurir</label>
                                <select name="courier" class="form-control">
                                    @foreach ($couriers as $courier => $value)
                                    <option value="{{ $courier }}"> {{ $value }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Berat (g)</label>
                                <input type="number" name="weight" id="" class="form-control" value="1000">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
</div>
</div>

<script>
$(document).ready(function() {
    $('select[name="province_origin"]').on('change', function(){
        let provinceId = $(this).val();
        if(provinceId) {
            jQuery.ajax({
                url: '/province/'+provinceId+'/cities',
                type:"GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="city_origin"]').empty();
                    $.each(data, function(key, value){
                        $('select[name="city_origin"]').append('<option value="'+ key +'">' + value + '</option>');
                    });
                },
            });
        } else {
            $('select[name="city_origin"]').empty();
        }
    });
    $('select[name="province_destination"]').on('change', function(){
        let provinceId = $(this).val();
        if(provinceId) {
            jQuery.ajax({
                url: '/province/'+provinceId+'/cities',
                type:"GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="city_destination"]').empty();
                    $.each(data, function(key, value){
                        $('select[name="city_destination"]').append('<option value="'+ key +'">' + value + '</option>');
                    });
                },
            });
        } else {
            $('select[name="city_destination"]').empty();
        }
    });
});
</script> --}}
@endsection