<template>
    <div class="contenido">
        <div class="wrapper">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="page-title">Buttons</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Stexo</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Buttons</li>
                            </ol>
                        </div>
                    </div>
                    <!-- end row -->
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Examples</h4>
                                <p class="sub-title">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>

                                <div class="button-items">
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>

                                    <button type="button" class="btn btn-secondary waves-effect">Secondary</button>

                                    <button type="button" class="btn btn-success waves-effect waves-light">Success</button>

                                    <button type="button" class="btn btn-info waves-effect waves-light">Info</button>

                                    <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>

                                    <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>

                                    <button type="button" class="btn btn-light waves-effect">Light</button>

                                    <button type="button" class="btn btn-dark waves-effect waves-light">Dark</button>

                                    <button type="button" class="btn btn-link waves-effect">Link</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Outline buttons</h4>
                                <p class="sub-title">In need of a button, but not the hefty
                                    background colors they bring? Replace the default modifier classes with
                                    the <code class="highlighter-rouge">.btn-outline-*</code> ones to remove
                                    all background images and colors on any button.</p>

                                <div class="button-items">
                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Success</button>
                                    <button type="button" class="btn btn-outline-info waves-effect waves-light">Info</button>
                                    <button type="button" class="btn btn-outline-warning waves-effect waves-light">Warning</button>
                                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Danger</button>
                                    <button type="button" class="btn btn-outline-dark waves-effect waves-light">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                        <div class="col-xl-6">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Button tags</h4>
                                    <p class="sub-title">The <code class="highlighter-rouge">.btn</code>
                                        classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element.
                                        However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements (though
                                        some browsers may apply a slightly different rendering).</p>

                                    <div class="button-items">
                                        <a class="btn btn-success" href="#" role="button">Link</a>
                                        <button class="btn btn-primary" type="submit">Button</button>
                                        <input class="btn btn-info" type="button" value="Input">
                                        <input class="btn btn-warning" type="submit" value="Submit">
                                        <input class="btn btn-danger" type="reset" value="Reset">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Sizes</h4>
                                    <p class="sub-title">Fancy larger or smaller buttons? Add
                                        <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.
                                    </p>

                                    <div class="button-items">
                                        <button type="button" class="btn btn-info btn-lg waves-effect waves-light">Large button</button>
                                        <button type="button" class="btn btn-secondary btn-lg waves-effect waves-light">Large button</button>
                                        <button type="button" class="btn btn-info btn-sm waves-effect waves-light">Small button</button>
                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Small button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Block Buttons</h4>
                                    <p class="sub-title">Create block level buttons—those that
                                        span the full width of a parent—by adding <code class="highlighter-rouge">.btn-block</code>.</p>

                                    <div class="button-items">
                                        <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light">Block level button</button>
                                        <button type="button" class="btn btn-secondary btn-sm btn-block waves-effect waves-light">Block level button</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Toggle states</h4>
                                    <p class="sub-title">Add <code class="highlighter-rouge">data-toggle="button"</code>
                                        to toggle a button’s <code class="highlighter-rouge">active</code>
                                        state. If you’re pre-toggling a button, you must manually add the <code class="highlighter-rouge">.active</code> class
                                        <strong>and</strong> <code class="highlighter-rouge">aria-pressed="true"</code> to the
                                        <code class="highlighter-rouge">&lt;button&gt;</code>.
                                    </p>

                                    <div class="button-items">
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="button" aria-pressed="false">
                                            Single toggle
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Checkbox buttons</h4>
                                    <p class="sub-title">Bootstrap’s <code class="highlighter-rouge">.button</code> styles can be applied to
                                        other elements, such as <code class="highlighter-rouge">
                                            &lt;label&gt;</code>s, to provide checkbox or radio style button
                                        toggling. Add <code class="highlighter-rouge">data-toggle="buttons"</code> to a
                                        <code class="highlighter-rouge">.btn-group</code> containing those
                                        modified buttons to enable toggling in their respective styles.</p>

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-info active">
                                            <input type="checkbox" checked=""> Active
                                        </label>
                                        <label class="btn btn-info">
                                            <input type="checkbox"> Check
                                        </label>
                                        <label class="btn btn-info">
                                            <input type="checkbox"> Check
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Radio buttons</h4>
                                    <p class="sub-title">Bootstrap’s <code class="highlighter-rouge">.button</code> styles can be applied to
                                        other elements, such as <code class="highlighter-rouge">
                                            &lt;label&gt;</code>s, to provide checkbox or radio style button
                                        toggling. Add <code class="highlighter-rouge">data-toggle="buttons"</code> to a
                                        <code class="highlighter-rouge">.btn-group</code> containing those
                                        modified buttons to enable toggling in their respective styles.</p>

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-light active">
                                            <input type="radio" name="options" id="option1" checked=""> Active
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" name="options" id="option2"> Radio
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" name="options" id="option3"> Radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
