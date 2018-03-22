<script src="<?php echo base_url('/assets/js/modernizr-2.6.2.min.js');?>"></script>


         <script src="<?php echo base_url('/assets/js/lightslider.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/bootstrap/js/bootstrap.min.js');?>"></script>

        <script src="<?php echo base_url('/assets/js/bootstrap-select.min.js');?>"></script>
        <script src="<?php echo base_url('/assets/js/bootstrap-hover-dropdown.js');?>"></script>

        <script src="<?php echo base_url('/assets/js/easypiechart.min.js');?>"></script>
        <!-- <script src="<?php // echo base_url('/asrsets/js/jquery.easypiechart.min.js');?>"></script> -->

        <script src="<?php echo base_url('/assets/js/owl.carousel.min.js');?>"></script>
        <script src="<?php echo base_url('/assets/js/wow.js');?>"></script>

        <script src="<?php echo base_url('/assets/js/icheck.min.js');?>"></script>
        <script src="<?php echo base_url('/assets/js/price-range.js');?>"></script>

        <script src="<?php echo base_url('/assets/js/main.js');?>"></script>
        <script src="<?php echo base_url('/assets/js/jquery.bootstrap.wizard.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('/assets/js/jquery.validate.min.js');?>"></script>
        <script src="<?php echo base_url('/assets/js/wizard.js');?>"></script>
        <script src="<?php echo base_url('/assets/js/axios.min.js');?>"></script>
        <script src="<?php echo base_url('/assets/js/toastr.min.js');?>"></script>
        <script src="<?php echo base_url('/assets/js/main.js');?>"></script>
<script src="<?php echo base_url('/assets/js/typeahead.js');?>"></script>

        <script type = "text/javascript" src = "<?php echo base_url('/assets/js/jquery.form.js');?>"></script>
<!--<script src="--><?php //echo base_url('/assets/js/form-validation.js'); ?><!--"></script>-->




<script>
    var kwargs = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        // url points to a json file that contains an array of country names, see
        // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
        prefetch: '<?php echo base_url('suggest'); ?>'
    });

    // passing in `null` for the `options` arguments will result in the default
    // options being used
    $('#the-basics.typeahead').typeahead(null, {
        name: 'kwargs',
        source: kwargs
    });




</script>
          
    </body>
</html>