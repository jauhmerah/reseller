

<tr class="list_<?= $num; ?>">
 <td><?= $num+1; ?></td>
 <td>
    <div class="row">
            <div class="col-sm-6">
                <input type="text" class="form-control" name="company[]" id="company" required placeholder="Company Name">
            </div>
    </div>
    <div class="row">
            <div class="col-sm-12">
                <textarea class="form-control" name="address[]" id="address" required placeholder="Address"></textarea>
            </div>
    </div>
                                                                          
                                                                          
    <div class="row">
            <div class="col-sm-6">
                <input type="text" class="form-control" name="postcode[]" id="postcode" required placeholder="Postcode No.">
                                                                                  
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="city[]" id="city" required placeholder="Town/City">
                                                                                  
            </div>
    </div>
    <div class="row">
            <div class="col-sm-6">
                <select class="form-control" name="country[]" id="country" required>
                    <option>--Select State--</option>
                                                                                  
                    <option value="1">Kuala Lumpur</option>
                    <option value="2">Labuan</option>
                    <option value="3">Putrajaya</option>
                    <option value="4">Johor</option>
                    <option value="5">Kedah</option>
                    <option value="6">Kelantan</option>
                    <option value="7">Melaka</option>
                    <option value="8">Negeri Sembilan</option>
                    <option value="9">Pahang</option>
                    <option value="10">Perak</option>
                    <option value="11">Perlis</option>
                    <option value="12">Pulau Pinang</option>
                    <option value="13">Sabah</option>
                    <option value="14">Sarawak</option>
                    <option value="15">Selangor</option>
                    <option value="16">Terengganu</option>
                </select>
            </div>
    </div>
    <div class="row">
       
            <!-- <div class="col-sm-4 i-checks">
                
                <input class="rad form-control-custom" type="checkbox" name="cu[]" id="checkboxCustom">   
                <label class="form-control-label" for="checkboxCustom2">Mark as my current address</label>
            </div>   -->
             <div class="col-sm-4 i-checks">
                          <input id="checkboxCustom<?= $num; ?>" type="checkbox" class="rad form-control-custom" name="cu[<?= $num; ?>]" id="cu" value=true>
                          <label for="checkboxCustom<?= $num; ?>">Mark as my current address</label>
            </div>        
                                                                            
    </div>
    <div class="row">
        <div class="col-sm-6">
            <input type="text" class="form-control" name="phone[]" id="phone" required placeholder="Contact Number">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <textarea class="form-control" name="note[]" id="note"></textarea>
        </div>
    </div>

    <input type="hidden" name="AddId[]" id="inputAddId[]" class="form-control" value="<?= $num; ?>">

</td>

<td align="center">
            <button type="button" class="btn btn-danger delBtn<?= $num; ?>"><i class="fa fa-trash fa-md"></i></button>
</td>
</tr>
<tr>
<script>
$(document).ready(function() {
    // $('.rad').bootstrapSwitch();

    $('.delBtn<?= $num; ?>').click(function() {
				$(".list_<?= $num; ?>").remove();
	});	

    $(".rad").change(function() {
                
				$(".rad").prop('checked',false);
                $(this).prop('checked',true);
	      });		
      
});

</script>