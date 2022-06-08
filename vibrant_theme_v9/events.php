<?php $this->inc("elements/header.php"); ?>

<section class="internal-hero-wrapper">
    <div class="hero-container">
        <?php
            $a = new Area("Header Hero");
            $a->display($c);
        ?>
    </div>
</section>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row gx-5">
            <div class="content col pe-lg-5">
                <?php
                    $a = new Area("Internal Content");
                    $a->display($c);
                ?>
            </div>

            <?php
                $area = GlobalArea::get($c, "Sidebar");
                if ($area) {
                    $pageBlocks = $area->getAreaBlocksArray($c);
                    $hasContent = false;
                    
                    foreach ($pageBlocks as $pb) {
                        $content = $pb->getController()->getNavItems();
                        if (!empty($content)) {
                            $hasContent = true;
                        } else {
                            echo '';
                        }
                    }
                }

            if ($hasContent || $c->isEditMode()) { ?>
                <div class="col-lg-3 py-3 sidebar">
                    <?php
                        $a = new GlobalArea("Sidebar");
                        $a->display();
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php $this->inc("elements/footer.php"); ?>