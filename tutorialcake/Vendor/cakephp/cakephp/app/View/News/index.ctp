
<h1 class="page-header"><?php echo __('News'); ?></h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('title'); ?></th>
                <th><?php echo $this->Paginator->sort('descrioption'); ?></th>
                <th><?php echo $this->Paginator->sort('created'); ?></th>
                <th><?php echo $this->Paginator->sort('modified'); ?></th>
                <th><?php echo $this->Paginator->sort('category_id'); ?></th>
                <th class="actions"></th>
                <th class="actions"></th>
                <th class="actions"></th>                    
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $news): ?>
                <tr>
                    <td><?php echo h($news['News']['id']); ?>&nbsp;</td>
                    <td><?php echo h($news['News']['title']); ?>&nbsp;</td>
                    <td><?php echo h($news['News']['descrioption']); ?>&nbsp;</td>
                    <td><?php echo h($news['News']['created']); ?>&nbsp;</td>
                    <td><?php echo h($news['News']['modified']); ?>&nbsp;</td>
                    <td><?php echo h($news['News']['category_id']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $news['News']['id'])); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id'])); ?>
                    </td>
                    <td>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), array(), __('Are you sure you want to delete # %s?', $news['News']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<p>
    <?php
    echo $this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>	
</p>
<div class="paging">
    <?php
    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
    echo $this->Paginator->numbers(array('separator' => ''));
    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
</div>

<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
