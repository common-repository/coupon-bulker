<div style='text-align:center;'>
    <h2 style='color: red;'>Bulk Coupon Delete</h2>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-2">
</div>
        <div class="col-8">
            <section style="text-align: center; direction: ltr;">
                <form>
                    <div class="form-group">
                        <label for="code_prefix" style="display: block;">Coupon-Code prefix</label>
                        <input type="text" id="code_prefix" aria-describedby="prefixHelp" placeholder="prefix" value="bulker" style="margin: 10px 10px 2px; border-color: #ff0000; border-width: 1px; border-radius: 5px; font-size: 16px;">
                        <small id="prefixHelp" class="form-text text-muted" style="display: block;">Delete all unused coupons with this prefix</small>
                    </div>
                </form>
                <button id="coupon_bulk_delete" data-id="<?= $coupon_id ?>" type="button" class="btn btn-warning" style="text-align: center; background-color: #ff0000; font-size: 18px; color: #ffffff; padding: 5px; border-radius: 5px;">Delete</button>
                <hr>
                <div id="coupon_bulker_csv"></div>
                <hr>
            </section>
        </div>
        <div class="col-2">
</div>
    </div>
</div>
