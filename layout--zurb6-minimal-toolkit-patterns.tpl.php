<?php
/**
 * @file
 * This is a set of patterns for building layouts. Comment/remove or uncomment the regions you desire into Zurb Minimal Toolkit and rename.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node.)
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header'] header
 *   - $content['top'] div
 *   - $content['content'] main
 *   - $content['sidebar'] aside
 *   - $content['sidebar2'] aside
 *   - $content['sidebar3'] aside
 *   - $content['half1'] section
 *   - $content['half2'] section
 *   - $content['third1'] section
 *   - $content['third2'] section
 *   - $content['third3'] section
 *   - $content['quarter1'] section
 *   - $content['quarter2'] section
 *   - $content['quarter3'] section
 *   - $content['quarter4'] section
 *   - $content['half3'] section
 *   - $content['half4'] section
 *   - $content['third4'] section
 *   - $content['third5'] section
 *   - $content['third6'] section
 *   - $content['quarter5'] section
 *   - $content['quarter6'] section
 *   - $content['quarter7'] section
 *   - $content['quarter8'] section
 *   - $content['statement1'] div
 *   - $content['statement2'] div
 *   - $content['statement3'] div
 *   - $content['secondary1'] div
 *   - $content['secondary2'] div
 *   - $content['bottom'] div
 *   - $content['calltoaction'] footer
 *   - $content['footer'] footer
 */
?>

<?php if ($content['header']): ?>
    <header class="row expanded column l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
        <?php print $content['header']; ?>
    </header>
<?php endif; ?>

<div class="layout--zurb6-minimal-toolkit-patterns <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <div class="l-wrapper">

      <?php if ($content['top']): ?>
        <div class="row expanded column l-top" role="region">
            <?php print $content['top']; ?>
        </div>
      <?php endif; ?>

      <?php if ($messages): ?>
        <div class="l-messages column" role="status" aria-label="<?php print t('Status messages'); ?>">
            <?php print $messages; ?>
        </div>
      <?php endif; ?>

      <div class="l-page-title">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      </div>

      <?php if ($tabs): ?>
        <nav class="tabs" role="tablist" aria-label="<?php print t('Admin content navigation tabs.'); ?>">
          <?php print $tabs; ?>
        </nav>
      <?php endif; ?>

      <?php print $action_links; ?>

      <?php if ($content['content']): ?>
        <main class="row expanded column l-content" role="main" aria-label="<?php print t('Main content'); ?>">
            <?php print $content['content']; ?>
        </main>
      <?php endif; ?>

<!-- content sidebar -->
      <div class="row expanded small-uncollapse large-uncollapse">
          <?php if ($content['content']): ?>
            <main class="small-12 medium-8 large-9 small-order-1 medium-order-1 l-content" role="main" aria-label="<?php print t('Main content'); ?>">
                <?php print $content['content']; ?>
            </main>
          <?php endif; ?>

          <?php if ($content['sidebar']): ?>
            <aside class="small-12 medium-4 large-3 small-order-2 medium-order-2 l-sidebar l-sidebar1" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
                <?php print $content['sidebar']; ?>
            </aside>
          <?php endif; ?>
      </div>


<!-- sidebar content -->
      <div class="row expanded small-uncollapse large-uncollapse">
          <?php if ($content['sidebar']): ?>
            <aside class="small-12 medium-4 large-3 small-order-2 medium-order-1 l-sidebar l-sidebar1" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
                <?php print $content['sidebar']; ?>
            </aside>
          <?php endif; ?>

          <?php if ($content['content']): ?>
            <main class="small-12 medium-8 large-9 small-order- medium-order-2 l-content" role="main" aria-label="<?php print t('Main content'); ?>">
                <?php print $content['content']; ?>
            </main>
          <?php endif; ?>
      </div>

<!-- sidebar content sidebar -->
      <div class="row expanded small-uncollapse large-uncollapse">
          <?php if ($content['sidebar']): ?>
            <aside class="small-12 medium-4 large-3 small-order-2 medium-order-1 l-sidebar l-sidebar1" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
                <?php print $content['sidebar']; ?>
            </aside>
          <?php endif; ?>

          <?php if ($content['content']): ?>
            <main class="small-12 medium-8 large-6 small-order-1 medium-order-2 l-content" role="main" aria-label="<?php print t('Main content'); ?>">
                <?php print $content['content']; ?>
            </main>
          <?php endif; ?>

          <?php if ($content['sidebar2']): ?>
            <aside class="small-12 medium-12 large-3 small-order-3 medium-order-3 l-sidebar l-sidebar2" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
                <?php print $content['sidebar2']; ?>
            </aside>
          <?php endif; ?>
      </div>


<!-- sidebar sidebar content -->
    <div class="row expanded small-uncollapse large-uncollapse">
          <?php if ($content['sidebar']): ?>
            <aside class="small-12 medium-4 large-3 small-order-2 medium-order-1 large-order-1 l-sidebar l-sidebar1" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
                <?php print $content['sidebar']; ?>
            </aside>
          <?php endif; ?>

          <?php if ($content['sidebar2']): ?>
            <aside class="small-12 medium-12 large-3 small-order-3 medium-order-3 large-order-2 l-sidebar l-sidebar2" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
                <?php print $content['sidebar2']; ?>
            </aside>
          <?php endif; ?>

          <?php if ($content['content']): ?>
            <main class="small-12 medium-8 large-6 small-order-1 medium-order-2 large-order-3 l-content main" role="main" aria-label="<?php print t('Main content'); ?>">
                <?php print $content['content']; ?>
            </main>
          <?php endif; ?>
      </div>


<!-- content sidebar sidebar -->
    <div class="row expanded small-uncollapse large-uncollapse">
          <?php if ($content['content']): ?>
            <main class="small-12 medium-8 large-6 small-order-1 medium-order-1 l-content" role="main" aria-label="<?php print t('Main content'); ?>">
                <?php print $content['content']; ?>
            </main>
          <?php endif; ?>

          <?php if ($content['sidebar']): ?>
            <aside class="small-12 medium-4 large-3 small-order-2 medium-order-2 l-sidebar l-sidebar1" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
                <?php print $content['sidebar']; ?>
            </aside>
          <?php endif; ?>

          <?php if ($content['sidebar2']): ?>
            <aside class="small-12 medium-12 large-3 small-order-3 medium-order-3 l-sidebar l-sidebar2" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
                <?php print $content['sidebar2']; ?>
            </aside>
          <?php endif; ?>
      </div>




      <?php if ($content['half1'] || $content['half2']): ?>
        <section class="row expanded align-center l-halves" role="region">
          <?php if ($content['half1']): ?>
            <div class="small-12 medium-expand column l-halves-region l-half1">
              <?php print $content['half1']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['half2']): ?>
            <div class="small-12 medium-expand column l-halves-region l-half2">
              <?php print $content['half2']; ?>
            </div>
          <?php endif; ?>
        </section>
      <?php endif; ?>

      <?php if ($content['third1'] || $content['third2'] || $content['third3']): ?>
        <section class="row expanded align-center l-thirds" role="region">
          <?php if ($content['third1']): ?>
            <div class="small-12 medium-expand column l-thirds-region l-third1">
              <?php print $content['third1']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['third2']): ?>
            <div class="small-12 medium-expand column l-thirds-region l-third2">
              <?php print $content['third2']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['third3']): ?>
            <div class="small-12 medium-expand column l-thirds-region l-third3">
              <?php print $content['third3']; ?>
            </div>
          <?php endif; ?>
        </section>
      <?php endif; ?>

      <?php if ($content['quarter1'] || $content['quarter2'] || $content['quarter3'] || $content['quarter4']): ?>
        <section class="row expanded align-center l-quarters" role="region">
          <?php if ($content['quarter1']): ?>
            <div class="small-12 medium-expand column l-quarters-region l-quarter1">
              <?php print $content['quarter1']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['quarter2']): ?>
            <div class="small-12 medium-expand column l-quarters-region l-quarter2">
              <?php print $content['quarter2']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['quarter3']): ?>
            <div class="small-12 medium-expand column l-quarters-region l-quarter3">
              <?php print $content['quarter3']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['quarter4']): ?>
            <div class="small-12 medium-expand column l-quarters-region l-quarter4">
              <?php print $content['quarter4']; ?>
            </div>
          <?php endif; ?>
        </section>
      <?php endif; ?>

      <?php if ($content['half3'] || $content['half4']): ?>
        <section class="row expanded align-center l-halves" role="region">
          <?php if ($content['half3']): ?>
            <div class="small-12 medium-expand column l-halves-region l-half3">
              <?php print $content['half3']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['half4']): ?>
            <div class="small-12 medium-expand column l-halves-region l-half4">
              <?php print $content['half4']; ?>
            </div>
          <?php endif; ?>
        </section>
      <?php endif; ?>

      <?php if ($content['third4'] || $content['third5'] || $content['third6']): ?>
        <section class="row expanded align-center l-thirds" role="region">
          <?php if ($content['third4']): ?>
            <div class="small-12 medium-expand column l-thirds-region l-third4">
              <?php print $content['third4']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['third5']): ?>
            <div class="small-12 medium-expand column l-thirds-region l-third5">
              <?php print $content['third5']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['third6']): ?>
            <div class="small-12 medium-expand column l-thirds-region l-third6">
              <?php print $content['third6']; ?>
            </div>
          <?php endif; ?>
        </section>
      <?php endif; ?>

      <?php if ($content['quarter5'] || $content['quarter6'] || $content['quarter7'] || $content['quarter8']): ?>
        <section class="row expanded align-center l-quarters" role="region">
          <?php if ($content['quarter5']): ?>
            <div class="small-12 medium-expand column l-quarters-region l-quarter5">
              <?php print $content['quarter5']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['quarter6']): ?>
            <div class="small-12 medium-expand column l-quarters-region l-quarter6">
              <?php print $content['quarter6']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['quarter7']): ?>
            <div class="small-12 medium-expand column l-quarters-region l-quarter7">
              <?php print $content['quarter7']; ?>
            </div>
          <?php endif; ?>
          <?php if ($content['quarter8']): ?>
            <div class="small-12 medium-expand column l-quarters-region l-quarter8">
              <?php print $content['quarter8']; ?>
            </div>
          <?php endif; ?>
        </section>
      <?php endif; ?>

      <?php if ($content['statement1']): ?>
        <div class="row expanded column small-collapse medium-collapse large-collapse l-statement l-statement1" role="region">
            <?php print $content['statement1']; ?>
        </div>
      <?php endif; ?>

      <?php if ($content['statement2']): ?>
        <div class="row expanded column small-collapse medium-collapse large-collapse l-statement l-statement2" role="region">
            <?php print $content['statement2']; ?>
        </div>
      <?php endif; ?>

      <?php if ($content['statement3']): ?>
        <div class="row expanded column small-collapse medium-collapse large-collapse l-statement l-statement3" role="region">
            <?php print $content['statement3']; ?>
        </div>
      <?php endif; ?>

      <?php if ($content['secondary1']): ?>
        <div class="row expanded column small-collapse medium-collapse large-collapse l-secondary l-secondary1" role="region">
            <?php print $content['secondary1']; ?>
        </div>
      <?php endif; ?>

      <!-- secondary sidebar -->
      <div class="row expanded small-uncollapse large-uncollapse">
          <?php if ($content['secondary2']): ?>
            <div class="small-12 medium-8 large-9 small-order-1 medium-order-1 l-secondary l-secondary2" role="region">
              <?php print $content['secondary2']; ?>
            </div>
          <?php endif; ?>

          <?php if ($content['sidebar3']): ?>
            <aside class="small-12 medium-4 large-3 small-order-2 medium-order-2 l-sidebar l-sidebar3" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
                <?php print $content['sidebar3']; ?>
            </aside>
          <?php endif; ?>
      </div>

      <?php if ($content['bottom']): ?>
        <div class="row expanded column small-collapse medium-collapse large-collapse l-bottom" role="region">
            <?php print $content['bottom']; ?>
        </div>
      <?php endif; ?>

      <?php if ($content['calltoaction']): ?>
        <footer class="row expanded column align-center align-middle text-center small-collapse medium-collapse large-collapse l-calltoaction" role="secondary" aria-label="<?php print t('Action to take'); ?>">
            <?php print $content['calltoaction']; ?>
        </footer>
      <?php endif; ?>

  </div><!-- /.l-wrapper -->
</div><!-- /.layout--zurb6-minimal-toolkit-patterns -->

  <?php if ($content['footer']): ?>
    <footer class="row expanded column l-footer" role="contentinfo" aria-label="<?php print t('Footer navigation'); ?>">
        <?php print $content['footer']; ?>
    </footer>
  <?php endif; ?>
