jQuery(document).ready(function($) {
    const $province = $('#province_code');
    const $ward = $('#ward_code');

    $province.on('change', function() {
        const code = $(this).val();
        if (!code) { $ward.html('<option value="">Chọn phường/xã</option>'); return; }

        $.post(locationAjax.ajaxurl, {
            action: 'get_wards',
            province_code: code,
            nonce: locationAjax.nonce
        }, function(res) {
            let html = '<option value="">Chọn phường/xã</option>';
            res.data.forEach(w => {
                html += `<option value="${w.ward_code}">${w.name}</option>`;
            });
            $ward.html(html);
        });
    });
});