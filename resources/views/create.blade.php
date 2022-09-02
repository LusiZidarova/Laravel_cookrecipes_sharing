@extends('layout')
@section('content')


<div class="card uper">
  <div class="card-header">
    Добави нова рецепта
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif

    <form>

      <div class="form-group col-md-12">
        <label for="inputName">* Име на рецепта
          <input type="text" class="form-control" id="inputName" placeholder="Име на рецепта задължиелно">
        </label>
        <label for="inpuтCategory">* Категория
          <select id="categoryFilter" name="categoryFilter" class="form-control">
            <option value="0">Избери Категория</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </label>
      </div>


      <div class="form-group col-md-6">
        <label for="inputNational">* Кухня</label>
        <select id="nationalFilter" name="nationalFilter" class="form-control">
          <option value="0">Избери Кухня</option>
          @foreach ($nationals as $national)
          <option value="{{ $national->id }}">{{ $national->name }}</option>
          @endforeach
        </select>
      </div>



      <label for="inputTime">* Време за приготвяне
        <input type="number" class="form-control" id="inputTime" placeholder="Минути за приготвяне">
      </label>

      <label for="inputServing">Порции
        <input type="number" class="form-control" id="inputServing" placeholder="Порции">
      </label>
  </div>

  <form style="border:1px solid grey">

    <div class="form-group col-md-12">
      <div> <span> * Добави Продукти</span></div>

      <div class="form-group col-md-1"></div>
      <div class="form-group col-md-11">
        <label> Количество
          <input class="form-control" type="text" id="qty" placeholder="Количество">
        </label>

        <label>* Мярка
          <select id="MeasureFilter" name="measureFilter" class="form-control">
            <option value="0">Избери</option>
            @foreach ($measures as $measure)
            <option value="{{ $measure->id }}" data-name="{{ $measure->name }}" data-id="{{ $measure->id }}">{{ $measure->name }}</option>
            @endforeach
          </select>
        </label>
        <label>
          Продукт <input type="text" id="name" class="form-control" placeholder="Въведи продукт">
        </label>
        <label>
          <input type="button" class="add_product" value="Добави продукт">
        </label>

      </div>
    </div>


  </form>
  <div class="form-group col-md-12">
    <h4 class="center">Добавени продукти към рецептата</h4>
    <table class="table table-striped " id="products">
      <thead>
        <tr>
          <th>Количество</th>
          <th>Мярка</th>
          <th>Продукт</th>
          <th>Изтрий</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>

  <button type="submit" id="save" class="btn btn-primary">Добави</button>
  </form>

</div>

</div>
@endsection

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
  $(document).ready(function() {
    var count_row = 0;
    var products = [];
    $(".add_product").click(function() {
      var name = $("#name").val();
      var measure = $('select#MeasureFilter').find(':selected').data('name');
      var measure_id = $('select#MeasureFilter').find(':selected').data('id');
      var qty = $("#qty").val();
      var markup = "<tr><td>" + qty + "</td><td data-value='" + measure_id + "'>" + measure + "</td><td>" + name + "</td><td ><a class='delete' data-row='" + count_row + "'><i class='fa fa-remove'>X</i></a></td></tr>";


      if (name != '' && measure_id != '' && qty != '') {

        $("#products tbody").append(markup);

        products.push({
          count_row,
          qty,
          measure_id,
          name
        });
        count_row++;

        //  $("#name").val('');
        //$("#qty").val('');
      }

    });

    /* Delete row afer clicked X in table with products */
    $('#products tbody').on('click', '.delete', function(e) {
      let row_id = $(this).data('row');
      console.log(products);
      console.log('row_id is : ' + row_id);
      products.splice(row_id, 1);
      $(this).closest('tr').remove()
      console.log(products);
    })

    function getData() {
      return JSON.stringify({
        name: $('#inputName').val(),
        category: $('#categoryFilter').find(":selected").val(),
        national: $('#nationalFilter').find(":selected").val(),
        time: $('#inputTime').val(),
        serving: $('#inputServing').val(),
        products:products,
      });
    }

    $("#save").click(function(event) {
      event.preventDefault();

      console.log('is getData()');
      console.log(getData());

    // var category= $('#categoryFilter').find(":selected").val();
   //   var national= $('#nationalFilter').find(":selected").val();




      /* 		$.ajax({
      			type: "PUT",
      			url: "/api/addrecipe/",
      			data: getData(),
      			contentType: 'application/json',
      			success: function( data, textStatus, jQxhr ){
      				toastr["success"]("Промените са запазени.");
      				$('html, body').animate({scrollTop:0}, 500);
      			},
      			error: function( jqXhr, textStatus, errorThrown ){
      				toastr["error"](jqXhr.responseText, "Моля, обърни внимание!");
      			}
      		}); */
    });

  });
</script>