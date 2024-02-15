<?php wp_enqueue_script( $this->plugin_name."-calculator", acePluginBaseURL_calculator() . 'public/js/calculator.js', array( 'jquery' ), $this->version, true );  ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Courier+Prime&family=Gabarito:wght@400;700;900&family=Gloria+Hallelujah&family=Inter&family=Kablammo&family=Lato&family=Montserrat&family=Phudu&family=Roboto&display=swap');
    </style>
<div class="col-md-8 col-sm-8 form-generator">


  <?php $calculator = get_option('calculator');?>
    <div class="page_title">
        <div>
            <h1><?php echo $calculator['calculator-title']; ?></h1>
        </div>
    </div>
   
    <div class="col-12 mt-3">
        <p><?php echo $calculator['calculator-description']; ?></p>
        <div id="calculator">
          <h2><?php echo $calculator['calculator-title']; ?></h2>
            <form name="sci-calc">
                <table class="calculator" cellspacing="0" cellpadding="1">
                    <tr>
                        <td colspan="5"><input id="display" name="display" value="0" size="28" maxlength="25"></td>
                    </tr>
                    <tr>
                        <td><input type="button" class="btnTop" name="btnTop" value="C" onclick="this.form.display.value=  0 "></td>
                        <td><input type="button" class="btnTop" name="btnTop" value="&#x232B;" onclick="deleteChar(this.form.display)"></td>
                        <td><input type="button" class="btnTop" name="btnTop" value="=" onclick="if(checkNum(this.form.display.value)) { compute(this.form) }"></td>
                        <td><input type="button" class="btnOpps" name="btnOpps" value="&#960;"onclick="addChar(this.form.display,'3.14159265359')"></td>
                        <td><input type="button" class="btnMath" name="btnMath" value="%" onclick=" percent(this.form.display)"></td>
                    </tr>
                    <tr>
                        <td><input type="button" class="btnNum" name="btnNum" value="7" onclick="addChar(this.form.display, '7')"></td>
                        <td><input type="button" class="btnNum" name="btnNum" value="8" onclick="addChar(this.form.display, '8')"></td>
                        <td><input type="button" class="btnNum" name="btnNum" value="9" onclick="addChar(this.form.display, '9')"></td>
                        <td><input type="button" class="btnOpps" name="btnOpps" value="x&#94;" onclick="if(checkNum(this.form.display.value)) { exp(this.form) }"></td>
                        <td><input type="button" class="btnMath" name="btnMath" value="/" onclick="addChar(this.form.display, '/')"></td>
                    <tr>
                        <td><input type="button" class="btnNum" name="btnNum" value="4" onclick="addChar(this.form.display, '4')"></td>
                        <td><input type="button" class="btnNum" name="btnNum" value="5" onclick="addChar(this.form.display, '5')"></td>
                        <td><input type="button" class="btnNum" name="btnNum" value="6" onclick="addChar(this.form.display, '6')"></td>
                        <td><input type="button" class="btnOpps" name="btnOpps" value="ln" onclick="if(checkNum(this.form.display.value)) { ln(this.form) }"></td>
                        <td><input type="button" class="btnMath" name="btnMath" value="*" onclick="addChar(this.form.display, '*')"></td>
                    </tr>
                    <tr>
                        <td><input type="button" class="btnNum" name="btnNum" value="1" onclick="addChar(this.form.display, '1')"></td>
                        <td><input type="button" class="btnNum" name="btnNum" value="2" onclick="addChar(this.form.display, '2')"></td>
                        <td><input type="button" class="btnNum" name="btnNum" value="3" onclick="addChar(this.form.display, '3')"></td>
                        <td><input type="button" class="btnOpps" name="btnOpps" value="&radic;" onclick="if(checkNum(this.form.display.value)) { sqrt(this.form) }"></td>
                        <td><input type="button" class="btnMath" name="btnMath" value="-" onclick="addChar(this.form.display, '-')"></td>
                    </tr>
                    <tr>
                        <td><input type="button" class="btnMath" name="btnMath" value="&#177;" onclick="changeSign(this.form.display)"></td>
                        <td><input type="button" class="btnNum" name="btnNum" value="0" onclick="addChar(this.form.display, '0')"></td>
                        <td><input type="button" class="btnMath" name="btnMath" value="&#46;" onclick="addChar(this.form.display, '&#46;')"></td>
                        <td><input type="button" class="btnOpps" name="btnOpps" value="x&#50;" onclick="if(checkNum(this.form.display.value)) { square(this.form) }"></td>
                        <td><input type="button" class="btnMath" name="btnMath" value="+" onclick="addChar(this.form.display, '+')"></td>
                    </tr>
                    <tr>
                        <td><input type="button" class="btnMath" name="btnMath" value="(" onclick="addChar(this.form.display, '(')"></td>
                        <td><input type="button" class="btnMath" name="btnMath" value=")" onclick="addChar(this.form.display,')')"></td>
                        <td><input type="button" class="btnMath" name="btnMath" value="cos" onclick="if(checkNum(this.form.display.value)) { cos(this.form) }"></td>
                        <td><input type="button" class="btnMath" name="btnMath" value="sin" onclick="if(checkNum(this.form.display.value)) { sin(this.form) }"></td>
                        <td><input type="button" class="btnMath" name="btnMath" value="tan" onclick="if(checkNum(this.form.display.value)) { tan(this.form) }"></td>
                    </tr>  
                </table>
            </form>
        </div>
    </div>
</div>
