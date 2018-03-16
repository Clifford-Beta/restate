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

    var substringMatcher = function(strs) {
        return function findMatches(q, cb) {
            var matches, substringRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {
                    matches.push(str);
                }
            });

            cb(matches);
        };
    };

    var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
        'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
        'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
        'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
        'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
        'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
        'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
        'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
        'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
    ];

    $('#the-basics .typeahead').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        },
        {
            name: 'states',
            source: substringMatcher(states)
        });
</script>
          
    </body>
</html>