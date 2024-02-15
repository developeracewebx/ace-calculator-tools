
// funcations
var ComparisonDiagonals = new Array;
var ComparisonAspectRat = new Array;
var ComparisonWidths = new Array;
var ComparisonHeights = new Array;

function FakeRound(number, decimals) {
    var magnitude = Math.pow(10, decimals);
    return Math.round(number * magnitude) / magnitude;
}

function WidthFromDiagonal(diagonal, aspect) {
    return diagonal * Math.sin(Math.atan(aspect));
}

function HeightFromDiagonal(diagonal, aspect) {
    return diagonal * Math.cos(Math.atan(aspect));
}

//  1st Calculator 
jQuery(document).ready(function() {
    getSystemAspectRatio()

    function calculateDimensions() {
        var pixels = parseFloat(jQuery("#pixels").val());
        var aspectRatio = parseFloat(jQuery("#aspectRatio").val());
        var selectedRatio = parseFloat(jQuery("#ratioSelect").val());

        // Calculate dimensions
        var width = Math.sqrt(pixels / selectedRatio) * aspectRatio;
        var height = width / aspectRatio;

        // Update the HTML with the calculated values
        jQuery("#outputPixels").text(pixels.toFixed(0));
        jQuery("#outputRatio").text(aspectRatio.toFixed(3));
        jQuery("#outputDimensions").text(width.toFixed(0) + 'x' + height.toFixed(0));
    }

    // Function to get the system's accurate aspect ratio
    function getSystemAspectRatio() {

        var screenWidth = window.screen.width;
        var screenHeight = window.screen.height;
        var systemAspectRatio = screenWidth / screenHeight;
        return systemAspectRatio.toFixed(3);
    }
    // Set the initial value of the "Choose Aspect Ratio" dropdown and update #aspectRatio on page load
    var systemAspectRatio = getSystemAspectRatio();
    // $("#ratioSelect").val(systemAspectRatio);
    jQuery("#aspectRatio").val(systemAspectRatio);

    // Calculate dimensions on page load
    calculateDimensions();

    // Calculate dimensions when "Choose Aspect Ratio" is changed
    jQuery("#ratioSelect").change(function() {
        var selectedRatio = parseFloat($(this).val());
        // alert(selectedRatio);
        jQuery("#aspectRatio").val(selectedRatio);
        calculateDimensions();
    });

    // Calculate dimensions when "Pixels" or "Aspect Ratio" is changed
    jQuery("#pixels, #aspectRatio").on("input", function() {

        calculateDimensions();
    });
});

//  1st Calculator ending


//  2st Calculator starting
jQuery(document).ready(function() {
    logUserAction("Screen Aspect Ratio Calculator");
    // Calculate image dimension (in pixels) from total number of pixels and aspect ratio on page load
    ScreenSizeToBodySizeRatio()
    // Calculate optimal viewing distance from screen size function on page load
    CalcViewingDistance()
    // Set the initial values of input fields
    var systemWidth = parseFloat(window.screen.width);
    var systemHeight = parseFloat(window.screen.height);
    var systemAspectRatio = systemWidth / systemHeight;

    // Update the HTML with the calculated values
    jQuery("#outaspecthw").text(systemAspectRatio.toFixed(3));
    jQuery("#outwidthhw").text(systemWidth.toFixed(0));
    jQuery("#outpheigthw").text(systemHeight.toFixed(0));

    jQuery("#widthhw").val(systemWidth);
    jQuery("#Heighthw").val(systemHeight);
    jQuery("#aspecthw").val(systemAspectRatio.toFixed(3));

    // Function to calculate and update dimensions
    function calculateDimensions() {
        var aspectRatio = parseFloat(jQuery("#aspecthw").val());
        var selectedOption = parseFloat(jQuery("#selecthw").val());

        // display height accouding Choose Aspect Ratio
        var enterwidth = parseFloat(jQuery("#widthhw").val());
        var displayheight = enterwidth / aspectRatio;
        // Calculate dimensions based on the selected aspect ratio
        var width = Math.sqrt(systemWidth * systemHeight / selectedOption) * aspectRatio;

        var height = width / aspectRatio;

        // Update the HTML with the calculated values
        jQuery("#outaspecthw").text(aspectRatio.toFixed(3));
        jQuery("#outwidthhw").text(enterwidth.toFixed(0));
        jQuery("#outpheigthw").text(displayheight.toFixed(0));

        // Update the height input field value
        jQuery("#Heighthw").val(displayheight.toFixed(2));
    }

    // Call the function when "Choose Aspect Ratio" is changed
    jQuery("#selecthw").change(function() {
        var selectedOption = parseFloat(jQuery(this).val());

        // Update the aspect ratio input field
        jQuery("#aspecthw").val(selectedOption);

        // Calculate dimensions based on the selected aspect ratio
        calculateDimensions();
    });

    // Calculate dimensions when "Aspect Ratio" or "Height" is changed
    jQuery("#aspecthw, #Heighthw").on("input", function() {
        // Calculate dimensions based on the manually input aspect ratio or height
        calculateDimensions();
    });
});
//  2st Calculator starting ending

//  3 Calculator starting starting
var viewdist_diag = 50;
var viewdist_vert = 24.5;
var viewdist_wide = 46.6;
var viewdist_unit = 'in';
var viewdist_ar = '169';

function FakeRound(number, decimals) {
    var magnitude = Math.pow(10, decimals);
    return Math.round(number * magnitude) / magnitude;
}

function WidthFromDiagonal(diagonal, aspect) {
    return diagonal * Math.sin(Math.atan(aspect));
}

function HeightFromDiagonal(diagonal, aspect) {
    return diagonal * Math.cos(Math.atan(aspect));
}

function CalcViewingDistance() {
    viewdist_diag = Math.round(document.getElementById('viewdist_diag').value);
    document.getElementById('viewdist_diag').value = viewdist_diag;

    viewdist_unit = document.getElementById('unit').value;
    viewdist_ar = document.getElementById('diagonalRatio').value;

    if (viewdist_ar === '4x3') {
        viewdist_vert = HeightFromDiagonal(viewdist_diag, 1.333);
        viewdist_wide = WidthFromDiagonal(viewdist_diag, 1.333);
    } else if (viewdist_ar === '16x9') {
        viewdist_vert = HeightFromDiagonal(viewdist_diag, 1.78);
        viewdist_wide = WidthFromDiagonal(viewdist_diag, 1.78);
    } else if (viewdist_ar === '21x9') {
        viewdist_vert = HeightFromDiagonal(viewdist_diag, 2.37);
        viewdist_wide = WidthFromDiagonal(viewdist_diag, 2.37);
    }

    if (viewdist_unit === 'in') {
        document.getElementById('viewdist_min2').innerHTML = FakeRound((4 * viewdist_vert) / 12, 1) + ' feet';
        document.getElementById('viewdist_max2').innerHTML = FakeRound((8 * viewdist_vert) / 12, 1) + ' feet';
        document.getElementById('viewdist_opt2').innerHTML = FakeRound((6 * viewdist_vert) / 12, 1) + ' feet';
    } else {
        document.getElementById('viewdist_min2').innerHTML = FakeRound((4 * viewdist_vert * 2.54) / 100, 1) + ' meters';
        document.getElementById('viewdist_max2').innerHTML = FakeRound((8 * viewdist_vert * 2.54) / 100, 1) + ' meters';
        document.getElementById('viewdist_opt2').innerHTML = FakeRound((6 * viewdist_vert * 2.54) / 100, 1) + ' meters';
    }

    return true;
}
// 3 Calculator  ending

// 4 Calculator starting
function ScreenSizeToBodySizeRatio() {
    var output_ratio = '0';
    var output_screenx = '0';
    var output_screeny = '0';
    var screen_x = '0';
    var screen_y = '0';
    var screen_area = 0;
    var device_area = 0;
    var aspect_device = 1;
    var aspect_screen = 1;
    var wide = parseFloat(document.getElementById('sstbsr_wide').value);
    var high = parseFloat(document.getElementById('sstbsr_high').value);
    var diag = parseFloat(document.getElementById('sstbsr_screen').value);
    var resx = parseFloat(document.getElementById('sstbsr_resx').value);
    var resy = parseFloat(document.getElementById('sstbsr_resy').value);
    if ((wide > 0) && (high > 0) && (diag > 0) && (resx > 0) && (resy > 0)) {
        aspect_device = Math.max(wide, high) / Math.min(wide, high);
        aspect_screen = Math.max(resx, resy) / Math.min(resx, resy);
        device_area = wide * high;
        screen_x = WidthFromDiagonal(diag, aspect_screen);
        screen_y = HeightFromDiagonal(diag, aspect_screen);
        screen_area = screen_x * screen_y;
        output_ratio = FakeRound((screen_area / device_area) * 100, 2);
        output_screenx = FakeRound(screen_x, 2);
        output_screeny = FakeRound(screen_y, 2);
    }
    document.getElementById('sstbsr_x').innerHTML = output_screenx;
    document.getElementById('sstbsr_y').innerHTML = output_screeny;
    document.getElementById('sstbsr_ratio').innerHTML = output_ratio;
    return true;
}

// 4 Calculator ending

// 5 Calculator starting



function CalculateDimensions(theform) {


    if (Math.round(theform.diagonal.value) == 0) {

        if ((Math.round(theform.width.value) == 0) || (Math.round(theform.height.value) == 0)) {

            // alert('Either fill in diagonal, or width and height');
            return false;

        } else {

            theform.diagonal.value = Math.sqrt(Math.pow(theform.width.value, 2) + Math.pow(theform.height.value, 2));

        }

    } else {

        theform.width.value = WidthFromDiagonal(theform.diagonal.value, theform.aspect.value);
        theform.height.value = HeightFromDiagonal(theform.diagonal.value, theform.aspect.value);

    }
    theform.areafs.value = FakeRound(theform.width.value * theform.height.value, 2);
    theform.area133.value = FakeRound(ViewableArea(theform.width.value, theform.height.value, 1.33), 2);
    theform.area150.value = FakeRound(ViewableArea(theform.width.value, theform.height.value, 1.50), 2);
    theform.area169.value = FakeRound(ViewableArea(theform.width.value, theform.height.value, 1.78), 2);
    theform.area235.value = FakeRound(ViewableArea(theform.width.value, theform.height.value, 2.35), 2);
    theform.width.value = FakeRound(theform.width.value, 2);
    theform.height.value = FakeRound(theform.height.value, 2);
    theform.diagonal.value = FakeRound(theform.diagonal.value, 2);
    return true;

}

function ViewableArea(width, height, aspect) {
    var thisaspect = width / height;
    if (thisaspect >= aspect) {
        return height * (height * aspect);
    } else {
        return width * (width / aspect);
    }
}
// Calculaction  starting tabledata  apend on table

function AddToComparison(theform) {
    ComparisonDiagonals.push(theform.diagonal.value);
    ComparisonAspectRat.push(theform.aspect.value);
    ComparisonWidths.push(theform.width.value);
    ComparisonHeights.push(theform.height.value);

    maxarea = new Array(0, 0, 0, 0);
    for (i = 0; i < ComparisonDiagonals.length; i++) {
        thisarea = ViewableArea(ComparisonWidths[i], ComparisonHeights[i], ComparisonAspectRat[i]);
        if (thisarea > maxarea[0]) {
            maxarea[0] = thisarea;
            maxarea[1] = ViewableArea(ComparisonWidths[i], ComparisonHeights[i], 1.33);
            maxarea[2] = ViewableArea(ComparisonWidths[i], ComparisonHeights[i], 1.50);
            maxarea[3] = ViewableArea(ComparisonWidths[i], ComparisonHeights[i], 1.78);
            maxarea[4] = ViewableArea(ComparisonWidths[i], ComparisonHeights[i], 2.35);
        }
    }
    document.getElementById('comparison').innerHTML = '';
    for (i = 0; i < ComparisonDiagonals.length; i++) {
        thiswidth = WidthFromDiagonal(ComparisonDiagonals[i], ComparisonAspectRat[i]);
        thisheight = HeightFromDiagonal(ComparisonDiagonals[i], ComparisonAspectRat[i]);
        areas = new Array(4);
        areas[0] = ViewableArea(thiswidth, thisheight, ComparisonAspectRat[i]);
        areas[1] = ViewableArea(thiswidth, thisheight, 1.33);
        areas[2] = ViewableArea(thiswidth, thisheight, 1.50);
        areas[3] = ViewableArea(thiswidth, thisheight, 1.78);
        areas[4] = ViewableArea(thiswidth, thisheight, 2.35);
        thisline = '<tr>';
        thisline += '<td>' + FakeRound(ComparisonDiagonals[i], 1) + '<\/td>';
        thisline += '<td>' + FakeRound(ComparisonAspectRat[i], 2) + '<\/td>';
        thisline += '<td>' + FakeRound(thiswidth, 1) + '<\/td>';
        thisline += '<td>' + FakeRound(thisheight, 1) + '<\/td>';
        thisline += '<td>' + FakeRound(areas[0], 2) + '<\/td>';
        thisline += '<td>' + FakeRound(areas[1], 2) + '<\/td>';
        thisline += '<td>' + FakeRound(areas[2], 2) + '<\/td>';
        thisline += '<td>' + FakeRound(areas[3], 2) + '<\/td>';
        thisline += '<td>' + FakeRound(areas[4], 2) + '<\/td>';
        thisline += '<td>' + Math.round(areas[0] * 100 / maxarea[0], 2) + '%<\/td>';
        thisline += '<td>' + Math.round(areas[1] * 100 / maxarea[1], 2) + '%<\/td>';
        thisline += '<td>' + Math.round(areas[2] * 100 / maxarea[2], 2) + '%<\/td>';
        thisline += '<td>' + Math.round(areas[3] * 100 / maxarea[3], 2) + '%<\/td>';
        thisline += '<td>' + Math.round(areas[4] * 100 / maxarea[4], 2) + '%<\/td>';
        thisline += '<\/tr>';
        document.getElementById('comparison').innerHTML += thisline;
    }
}
   // Log User Activity
   function logUserAction(action) {
      jQuery.ajax({
         type: "POST",
         url: "<?php echo base_url('calculator/logUserAction'); ?>",
         data: {
            action: action
         }
      });
   }