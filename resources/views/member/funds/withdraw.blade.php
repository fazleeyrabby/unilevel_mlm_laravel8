@extends('layouts.member')
@section('title', 'Dashboard')
@section('content')
<style>
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  /* z-index: 99999999999;
  
  top: 100%;
  left: 0;
  right: 0; */
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/member')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <h5 class="page-title">Dashboard</h5>
    </div>
</div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="row">
    <div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Withdraw wallet balance</h4>
                <p class="text-muted m-b-30 font-14">Parsley is a javascript form validation
                    library. It helps you provide your users with feedback on their form
                    submission before sending it to your server.
                </p>
                <form action="" novalidate="" method="POST" autocomplete="on">
                    @csrf
                    
                    <div class="form-group">
                        <label>Withdraw(Username)</label>
                        <div>
                            <input type="text" name="receiver" id="myInput" value="{{old('receiver')}}" class="form-control @error('receiver') parsley-error @enderror" class="form-control parsley-error" required placeholder="dealer or sub-dealer">
                            <ul class="parsley-errors-list filled" id="parsley-id-29">
                            @error('receiver')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <div>
                            <input type="text" name="amount" value="{{old('amount')}}" class="form-control @error('amount') parsley-error @enderror" class="form-control parsley-error" required placeholder="Available balance {{ Auth::user()->bonus}}">
                            <ul class="parsley-errors-list filled" id="parsley-id-31">
                            @error('amount')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Transaction Note:</label>
                        <div>
                            <input name="notes" type="text" value="{{old('notes')}}" class="form-control @error('notes') parsley-error @enderror" class="form-control parsley-error" required="" data-parsley-length="[5,10]" placeholder="Text between 5 - 10 chars length" data-parsley-id="33">
                            <ul class="parsley-errors-list filled" id="parsley-id-33">
                            @error('notes')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Transaction password:</label>
                        <div>
                            <input name="transaction_password" type="text" class="form-control @error('transaction_password') parsley-error @enderror"  required="" data-parsley-min="6" placeholder="Min value is 6" data-parsley-id="35">
                            <ul class="parsley-errors-list filled" id="parsley-id-35">
                            @error('transaction_password')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Transaction confirm password:</label>
                        <div>
                            <input name="confirm_transaction_password" type="text" class="form-control @error('confirm_transaction_password') parsley-error @enderror"  required="" data-parsley-max="6" placeholder="Max value is 6" data-parsley-id="37">
                            <ul class="parsley-errors-list filled" id="parsley-id-37">
                            @error('confirm_transaction_password')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                            </ul>
                        </div>
                    </div>
                    
                    <div class="form-group m-b-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                            Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('script')

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + " </strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = {!! $dealers !!}

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);

@stop