<?php
$this->layout = '';
?>
<table width="1300" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#E6FFFF">
  <tr style="background-color: #E6FFFF">
    <td>
        <table width="1300" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
          <tr style="border-style: none; background-color: #E6FFFF">
            <td bgcolor="#E6FFFF">
            </body>
            </td>
          </tr>
        </table>
        <br>
        <table style="margin-bottom:0px" width="1300" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
          <tr style="border-style: none; background-color: #E6FFFF">
            <td style="padding: 0.1rem 0.1rem;text-align : center"><?php echo $this->Html->image('menu/top.png',array('width'=>'105','height'=>'36','url'=>array('controller'=>'Accounts','action'=>'index')));?></td>
            <td style="padding: 0.1rem 0.1rem;text-align : center"><?php echo $this->Html->image('menu/shinki.png',array('width'=>'105','height'=>'36','url'=>array('controller'=>'Shinkies','action'=>'index')));?></td>
        </tr>
        </table>

        <hr size="1" style="margin: 0.5rem">
        <table style="margin-bottom:0px" width="1300" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
          <tr style="border-style: none; background-color: #E6FFFF">
            <td style="padding: 0.1rem 0.1rem;text-align : center"><?php echo $this->Html->image('menu/seikyuusyori.png',array('width'=>'105','height'=>'36','url'=>array('controller'=>'Shinkies','action'=>'index')));?></td>
          </tr>
        </table>

        <hr size="2" style="margin: 0.5rem">

        <?= $this->Form->create($customers, ['url' => ['action' => 'seikyuuconfirm']]) ?>
        <br>

        <table align="center">
          <tr>
            <td align="center" width="280" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">取引先名</strong></td>
            <td align="center" width="280" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">請求月</strong></td>
          </tr>
          <tr>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($namehyouji) ?></td>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($monthSeikyuu) ?></td>
          </tr>
        </table>
        <br>
        <table align="center">
          <tr>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">請求日</strong></td>
            <td align="center" width="50" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">締め日</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">前月請求</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">入金額</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">調整</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">相殺</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">繰越</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">当月売上</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">消費税</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">税込売上</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">今月請求</strong></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($Today) ?></td>
            <td align="center" bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($simebi) ?></td>
            <td align="center" bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($Zenkai) ?></td>
            <td bgcolor="#FFFFCC" style="padding: 0.2rem"><?= $this->Form->input('nyuukingaku', array('type'=>'text', 'label'=>false, 'value'=>$nyuukinntotal, 'size'=>10)) ?></td>
            <td bgcolor="#FFFFCC" style="padding: 0.2rem"><?= $this->Form->input('tyousei', array('type'=>'text', 'label'=>false,  'value'=>$tyouseitotal,'size'=>10)) ?></td>
            <td bgcolor="#FFFFCC" style="padding: 0.2rem"><?= $this->Form->input('sousai', array('type'=>'text', 'label'=>false, 'value'=>$sousaitotal, 'size'=>10)) ?></td>
            <td align="center" bgcolor="#FFFFCC" style="padding: 0.2rem"><strong style="font-size: 9pt; color:blue">自動計算</strong></td>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($totalkingaku) ?></td>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($totalkingaku*0.1) ?></td>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($totalkingaku*1.1) ?></td>
            <td align="center" bgcolor="#FFFFCC" style="padding: 0.2rem"><strong style="font-size: 9pt; color:blue">自動計算</strong></td>
          </tr>
        </table>
        <br>
        <br>

        <table align="center">
          <tr>
            <td align="center" width="30" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 9pt">No.</strong></td>
            <td align="center" width="70" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 9pt">伝票番号</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">売上先</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">売上日</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">請求日</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">品名１行目</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">売上額</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">消費税</strong></td>
            <td align="center" width="100" bgcolor="#FFFFCC" style="font-size: 12pt;padding: 0.2rem"><strong style="font-size: 11pt">税込売上額</strong></td>
          </tr>

      <?php for ($i=0;$i<$count;$i++): ?>

          <tr>
            <td align="center"  bgcolor="#FFFFCC"  style="padding: 0.2rem"><?= h($i+1) ?></td>
            <td align="center"  bgcolor="#FFFFCC"  style="padding: 0.2rem"><?= h($arrDenpyou[$i]) ?></td>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($namehyouji) ?></td>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($arrSyuturyoku[$i]) ?></td>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($Today) ?></td>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h($arrPro_1[$i]) ?></td>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h(${"Totalprice".$i}) ?></td>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h(${"Totalprice".$i}*0.1) ?></td>
            <td align="center"  bgcolor="#FFFFCC" style="padding: 0.2rem"><?= h(${"Totalprice".$i}*1.1) ?></td>
          </tr>

      <?php endfor;?>

    </table>
    <br>

        <table align="center" border="2" bordercolor="#E6FFFF" cellpadding="0" cellspacing="0">
        <tr bgcolor="#E6FFFF" >
          <td align="left" rowspan="2" width="30" bgcolor="#E6FFFF" style="border: none"><div align="center"><?= $this->Form->submit(__('計算結果確認'), array('name' => 'confirm')); ?></div></td>
        </tr>
        </table>


    </td>
  </tr>
</table>

<?= $this->Form->control('id', array('type'=>'hidden', 'value'=>$id, 'label'=>false)) ?>
<?= $this->Form->control('namehyouji', array('type'=>'hidden', 'value'=>$namehyouji, 'label'=>false)) ?>
<?= $this->Form->control('monthSeikyuu', array('type'=>'hidden', 'value'=>$monthSeikyuu, 'label'=>false)) ?>
<?= $this->Form->control('Zenkai', array('type'=>'hidden', 'value'=>$Zenkai, 'label'=>false)) ?>
