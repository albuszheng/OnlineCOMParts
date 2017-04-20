<hr>
<br>
<h4>Specs</h4>
<br>
<div class="row specs">
    <div class="col-6">
        <p><span class="spec-name">Name</span>: <span class="spec-value">{{ $product->ProductName }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Manufacturer</span>: <span class="spec-value">{{ $product->$kind->Manufacturer }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Speed</span>: <span class="spec-value">{{ $product->$kind->Speed }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">CAS</span>: <span class="spec-value">{{ $product->$kind->CAS }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Modules</span>: <span class="spec-value">{{ $product->$kind->Modules }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Size</span>: <span class="spec-value">{{ $product->$kind->Size }}GB</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Price/GB</span>: <span class="spec-value">${{ $product->$kind->PricePerGB }}</span></p>
    </div>

</div>