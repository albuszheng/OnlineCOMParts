<hr>
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
        <p><span class="spec-name">Chipset</span>: <span class="spec-value">{{ $product->$kind->Chipset }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Memory</span>: <span class="spec-value">{{ $product->$kind->Memory }}GB</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">CoreClock</span>: <span class="spec-value">{{ $product->$kind->CoreClock }}GHz</span></p>
    </div>

</div>