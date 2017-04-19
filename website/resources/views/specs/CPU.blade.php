<hr>
<h4>Specs</h4>
<div class="row specs">
    <div class="col-6">
        <p><span class="spec-name">Name</span>: <span class="spec-value">{{ $product->ProductName }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Manufacturer</span>: <span class="spec-value">{{ $product->$kind->Manufacturer }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Operating Frequency</span>: <span class="spec-value">{{ $product->$kind->OperatingFrenquency }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Physical Cores</span>: <span class="spec-value">{{ $product->$kind->Cores }}</span></p>
    </div>
    <div class="col-6">
        <p><span class="spec-name">Thermal Design Power</span>: <span class="spec-value">{{ $product->$kind->ThermalDesignPower }}</span></p>
    </div>
</div>