{{-- select_pilihan_dtks --}}
<select class="form-control input-sm {{ $class ?? '' }}" {!! $attribut ?? '' !!} style="width:100%;">
    <option disabled selected value="">-----   Pilih   -----</option>
    <?php foreach($pilihan as $key => $item): ?>
    <option value="<?=$key?>" @selected($key . '' === ($selected_value . '' ?? ''))><?=$item?></option>
    <?php endforeach; ?>
</select>