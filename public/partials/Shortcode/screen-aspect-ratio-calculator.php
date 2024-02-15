<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<?php wp_enqueue_script( $this->plugin_name."-calculator", acePluginBaseURL_calculator() . 'public/js/screen-aspect-ratio-calculator.js', array( 'jquery' ), $this->version, true );  ?>
<?php $screen_aspect_calculator = get_option("screen-aspect-calculator"); ?>

<div class="col-md-8 col-sm-8 form-generator">
    <div class="page_title">
        <div>
            <h1><?php echo $screen_aspect_calculator['screen-title']; ?></h1>
        </div>
    </div>
    
    <div class="col-12 mt-3 calculator">
        <p><?php echo $screen_aspect_calculator['screen-description']; ?></p>
        <div id="calculator">
            <!-- 1st Calculator -->
            <h5><?php echo $screen_aspect_calculator['screen-1st-calculator-title']; ?></h5>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="aspectRatio"><?php echo $screen_aspect_calculator['screen-1st-calculator-aspect-ratio']; ?></label><br>
                    <input type="number" id="aspectRatio" value="1" min="0" required>
                    <br><br>
                </div>
                <div class="col-md-4">
                    <label for="pixels"><?php echo $screen_aspect_calculator['screen-1st-calculator-pixel']; ?></label><br>
                    <input type="number" id="pixels" value="2073600" min="0" required>
                    <br><br>
                </div>
                <div class="col-md-4">
                    <label for="ratioSelect"><?php echo $screen_aspect_calculator['screen-1st-calculator-choose-aspect-ratio']; ?></label><br>
                    <select id="ratioSelect" class="types-select" required>
                        <option value="1.00">1.00 = square</option>
                        <option value="1.25">1.25 = 5:4</option>
                        <option value="1.33">1.33 = 4:3</option>
                        <option value="1.50">1.50 = 3:2</option>
                        <option value="1.60">1.60 = 16:10</option>
                        <option value="1.67">1.67 = 5:3 (15:9)</option>
                        <option value="1.71">1.71 = 128:75</option>
                        <option value="1.78">1.78 = 16:9</option>
                        <option value="1.85">1.85</option>
                        <option value="2.33">2.33 = 21:9 (1792x768)</option>
                        <option value="2.35">2.35 = Cinemascope</option>
                        <option value="2.37">2.37 = "21:9" (2560x1080)</option>
                        <option value="2.39">2.39 = Panavision</option>
                    </select>
                    <br><br>
                </div>
                <div class="col-md-12 valueouput">
                    <p><?php echo $screen_aspect_calculator['screen-1st-calculator-valueout-first-part']; ?> <span id="outputPixels">2073600</span> <?php echo $screen_aspect_calculator['screen-1st-calculator-valueout-second-part']; ?> <span id="outputRatio">1.000</span> <?php echo $screen_aspect_calculator['screen-1st-calculator-valueout-third-part']; ?> <span id="outputDimensions">1440x1440</span></p>
                </div>
            </div>
            <!-- 1st Calculator end -->
           

            <hr>
            <!-- 2nd Calculator start -->
            <h5><?php echo $screen_aspect_calculator['screen-2nd-calculator-title']; ?></h5>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="value"><?php echo $screen_aspect_calculator['screen-2nd-calculator-aspect-ratio']; ?></label><br>
                    <input type="number" id="aspecthw" value="1" min="0" required>
                    <br><br>
                </div>
                <div class="col-md-3">
                    <label for="type"><?php echo $screen_aspect_calculator['screen-2nd-calculator-width']; ?></label><br>
                    <input type="number" id="widthhw" value="1" min="0" required>
                    <br><br>
                </div>
                <div class="col-md-3">
                    <label for="type"><?php echo $screen_aspect_calculator['screen-2nd-calculator-hight']; ?></label><br>
                    <input type="number" id="Heighthw" value="1" min="0" required>
                    <br><br>
                </div>
                <div class="col-md-3">
                    <label for="type"><?php echo $screen_aspect_calculator['screen-2nd-calculator-choose-aspect-ratio']; ?></label><br>
                    <select id="selecthw" class="types-select" required>
                        <option value="1">1.00 = square</option>
                        <option value="1.25">1.25 = 5:4</option>
                        <option value="1.33">1.33 = 4:3</option>
                        <option value="1.50">1.50 = 3:2</option>
                        <option value="1.60">1.60 = 16:10</option>
                        <option value="1.67">1.67 = 5:3 (15:9)</option>
                        <option value="1.71">1.71 = 128:75</option>
                        <option value="1.78">1.78 = 16:9</option>
                        <option value="1.85">1.85</option>
                        <option value="2.33">2.33 = 21:9 (1792x768)</option>
                        <option value="2.35">2.35 = Cinamascope</option>
                        <option value="2.37">2.37 = "21:9" (2560x1080)</option>
                        <option value="2.39">2.39 = Panavision</option>
                    </select>
                    <br><br>
                </div>
                <div class="col-md-12 valueouput">
                    <p><?php echo $screen_aspect_calculator['screen-2nd-calculator-valueout-first-part']; ?><span id="outaspecthw">1</span> <?php echo $screen_aspect_calculator['screen-2nd-calculator-valueout-second-part']; ?><span id="outwidthhw">1.000</span><?php echo $screen_aspect_calculator['screen-2nd-calculator-valueout-third-part']; ?> <span id="outpheigthw">1440</span></p>
                </div>
            </div>
            <!-- 2nd Calculator end -->
            <hr>

            <!-- 3rd Calculator start-->
            <h5><?php echo $screen_aspect_calculator['screen-3rd-calculator-title']; ?></h5>
            <br>

            <form action="/" method="get">
                <div class="row">
                    <div class="col-md-12 clc3 valueouput">
                        <p><?php echo $screen_aspect_calculator['screen-3rd-calculator-description-one']; ?>
                            <input type="number" id="viewdist_diag" value="50" onKeyUp="CalcViewingDistance();" onBlur="CalcViewingDistance();">

                            <select id="unit" onChange="CalcViewingDistance();">
                                <option value="in" id="viewdist_in">in</option>
                                <option value="cm" id="viewdist_cm">cm</option>
                            </select>
                            <?php echo $screen_aspect_calculator['screen-3rd-calculator-description-two']; ?>

                            <select id="diagonalRatio" onChange="CalcViewingDistance();">
                                <option value="4x3" id="viewdist_ar43">4:3</option>
                                <option value="16x9" id="viewdist_ar169">16:9</option>
                                <option value="21x9" id="viewdist_ar219">21:9</option>
                            </select>
                             <?php echo $screen_aspect_calculator['screen-3rd-calculator-description-three']; ?>
                            <span id="viewdist_min2"></span> and <span id="viewdist_max2"></span><?php echo $screen_aspect_calculator['screen-3rd-calculator-description-four']; ?> <span id="viewdist_opt2"></span>
                            <?php echo $screen_aspect_calculator['screen-3rd-calculator-description-five']; ?>
                        </p>
                        <br><br>
                    </div>
                </div>
            </form>

            <!-- 3rd Calculator end  -->
            <hr>
       
            <!-- 4th Calculator start  -->
            <h5> <?php echo $screen_aspect_calculator['screen-4th-calculator-title']; ?></h5>
            <br>
            <div class="row">
                <div class="col-md-12 clc4 valueouput">
                    <p><?php echo $screen_aspect_calculator['screen-4th-calculator-description']; ?>
                        <input type="number" id="sstbsr_wide" size="5" value="4" onInput="ScreenSizeToBodySizeRatio();" autocomplete="off" required> <?php echo $screen_aspect_calculator['screen-4th-calculator-wide']; ?>
                        <input type="number" id="sstbsr_high" size="5" value="5" onInput="ScreenSizeToBodySizeRatio();" autocomplete="off" required> <?php echo $screen_aspect_calculator['screen-4th-calculator-high']; ?>
                        <input type="number" id="sstbsr_screen" size="5" value="6" onInput="ScreenSizeToBodySizeRatio();" autocomplete="off" required> <?php echo $screen_aspect_calculator['screen-4th-calculator-screen']; ?>
                        <input type="number" id="sstbsr_resx" size="5" value="1920" onInput="ScreenSizeToBodySizeRatio();" autocomplete="off" required><?php echo $screen_aspect_calculator['screen-4th-calculator-Rest-x']; ?>
                        <input type="number" id="sstbsr_resy" size="5" value="1080" onInput="ScreenSizeToBodySizeRatio();" autocomplete="off" required><?php echo $screen_aspect_calculator['screen-4th-calculator-Rest-Y']; ?>
                    </p>
                    <p><?php echo $screen_aspect_calculator['screen-4th-calculator-result-first-titles']; ?><span id="sstbsr_x">???</span>x<span id="sstbsr_y">???</span><?php echo $screen_aspect_calculator['screen-4th-calculator-result-second-titles']; ?> <span id="sstbsr_ratio" style="font-weight: bold;">0</span><?php echo $screen_aspect_calculator['screen-4th-calculator-result-third-titles']; ?></p>
                    <!-- <script type="text/javascript">ScreenSizeToBodySizeRatio();</script></p> -->
                </div>
            </div>
            <!-- 4th Calculator  end-->
            <hr>
            
            <!-- 5th Calculator start-->
            <h5><?php echo $screen_aspect_calculator['screen-5th-calculator-titles']; ?></h5>
            <br>
            <form id="screen_dimensions_comparison_form">
                <div class="row">
                    <div class="col-md-4">
                        <label for="Diagonal5"><?php echo $screen_aspect_calculator['screen-5th-calculator-diagonal-title']; ?></label><br>
                        <input type="number" id="Diagonal5" name="diagonal" size="3" value="27" onChange="CalculateDimensions(this.form);">
                        <br><br>
                    </div>
                    <div class="col-md-4">
                        <label for="Width5"><?php echo $screen_aspect_calculator['screen-5th-calculator-width-title']; ?></label><br>
                        <input type="number" name="width" size="3" value="23.53" onChange="CalculateDimensions(this.form);" step="any">

                        <br><br>
                    </div>
                    <div class="col-md-4">
                        <label for="Height5"><?php echo $screen_aspect_calculator['screen-5th-calculator-high-title']; ?></label><br>
                        <input type="number" name="height" size="3" value="13.24" onChange="CalculateDimensions(this.form);" step="any">
                        <br><br>
                    </div>
                    <div class="col-md-3">
                        <label for="AspectRatio5"><?php echo $screen_aspect_calculator['screen-5th-calculator-aspect-ratio-title']; ?></label><br>
                        <input type="number" name="aspect" size="3" value="1.778" onChange="CalculateDimensions(this.form);" step="any">
                        <br><br>
                    </div>
                    <div class="col-md-3">
                        <label for="Ratio"><?php echo $screen_aspect_calculator['screen-5th-calculator-ratio-title']; ?></label><br>
                        <select name="ratios" class="types-select" required onChange="this.form.aspect.value = this.options[selectedIndex].value; CalculateDimensions(this.form);" step="any">
                            <option value="1">1.00 = square</option>
                            <!-- Other options... -->
                            <option value="1.25">1.25 = 5:4</option>
                            <option value="1.33">1.33 = 4:3</option>
                            <option value="1.50">1.50 = 3:2</option>
                            <option value="1.60">1.60 = 16:10</option>
                            <option value="1.67">1.67 = 5:3 (15:9)</option>
                            <option value="1.71">1.71 = 128:75</option>
                            <option value="1.78">1.78 = 16:9</option>
                            <option value="1.85">1.85</option>
                            <option value="2.33">2.33 = 21:9 (1792x768)</option>
                            <option value="2.35">2.35 = Cinamascope</option>
                            <option value="2.37">2.37 = "21:9" (2560x1080)</option>
                            <option value="2.39">2.39 = Panavision</option>
                        </select>
                        <br><br>
                    </div>


                    <div class="col-md-3">
                        <label for="fullscreen5"><?php echo $screen_aspect_calculator['screen-5th-calculator-fullscreen-title']; ?></label><br>
                        <input type="number" name="areafs" size="4" value="311.48" step="any" required>
                        <br><br>
                    </div>
                    <div class="col-md-3">
                        <label for="movie43"><?php echo $screen_aspect_calculator['screen-5th-calculator-4-:-3-movie-title']; ?></label><br>
                        <input type="number" name="area133" size="4" value="233" step="any" required>

                        <br><br>
                    </div>
                    <div class="col-md-4">
                        <label for="Area"><?php echo $screen_aspect_calculator['screen-5th-calculator-Area:-3:2-photo-title']; ?></label><br>
                        <input type="number" name="area150" size="4" value="262.78" step="any" required>

                        <br><br>
                    </div>
                    <div class="col-md-4">
                        <label for="movie16"><?php echo $screen_aspect_calculator['screen-5th-calculator-16:9-movie-title']; ?></label><br>
                        <input type="number" name="area169" size="4" value="311.13" step="any" required>
                        <br><br>
                    </div>
                    <div class="col-md-4">
                        <label for="type"><?php echo $screen_aspect_calculator['screen-5th-calculator-2.35-movie-title']; ?></label><br>
                        <input type="number" name="area235" size="4" value="235.67" step="any" required="">
                        <br><br>
                    </div>

                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary cmp" onClick="CalculateDimensions(this.form); AddToComparison(this.form);"><?php echo $screen_aspect_calculator['screen-5th-calculator-aspect-comparison-button-title']; ?></button>

                        <br><br>
                    </div>
            </form>
            <div class="col-md-12 valueouput">
                <div id="result" class="mt-3">
                    <table border="1" cellspacing="0" cellpadding="3" width="100%">
                        <tbody>
                            <tr>
                                <th colspan="4">&nbsp;</th>
                                <th colspan="5"><?php echo $screen_aspect_calculator['screen-5th-calculator-actual-area-title']; ?></th>
                                <th colspan="5"><?php echo $screen_aspect_calculator['screen-5th-calculator-relative-area-title']; ?></th>
                            </tr>
                            <tr>
                                <th><?php echo $screen_aspect_calculator['screen-5th-calculator-diagonal-title']; ?></th>
                                <th><?php echo $screen_aspect_calculator['screen-5th-calculator-ratio-title']; ?></th>
                                <th><?php echo $screen_aspect_calculator['screen-5th-calculator-width-title']; ?></th>
                                <th><?php echo $screen_aspect_calculator['screen-5th-calculator-high-title']; ?></th>
                                <th><?php echo $screen_aspect_calculator['screen-5th-calculator-full-title']; ?></th>
                                <th>4:3</th>
                                <th>3:2</th>
                                <th>16:9</th>
                                <th>2.35</th>
                                <th><?php echo $screen_aspect_calculator['screen-5th-calculator-full-title']; ?></th>
                                <th>4:3</th>
                                <th>3:2</th>
                                <th>16:9</th>
                                <th>2.35</th>
                            </tr>
                        </tbody>
                        <tbody id="comparison">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- 5th Calculator -->
    </div>
</div>
</div>
<!-- Include jQuery (you can download it or use a CDN) -->

