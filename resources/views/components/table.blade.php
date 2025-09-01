<?php
// Масив колонок
$columns = [
    "назва стовбців",
    "назва стовбців",
    "назва стовбців",
    "назва стовбців",
    "назва стовбців"
];

// Масив рядків
$rows = [
    [
        "Lorem ipsum dolor sit amet consectetur. Enim quam nulla viverra senectus.",
        "1234567",
        '<i class="ph-fill ph-check-circle"></i>',
        "Lorem ipsum dolor sit amet consectetur. Enim quam nulla viverra senectus.",
        "Lorem ipsum dolor sit amet consectetur. Enim quam nulla viverra senectus."
    ],
    [
        "Lorem ipsum dolor sit amet consectetur. Enim quam nulla viverra senectus.",
        "1234567",
        '<i class="ph-fill ph-check-circle"></i>',
        "Lorem ipsum dolor sit amet consectetur. Enим quam nulla viverra senectus.",
        "Lorem ipsum dolor sit amet consectetur. Enim quam nulla viverra senectus."
    ],
    [
        "Lorem ipsum dolor sit amet consectetur. Enim quam nulla viverra senectus.",
        "1234567",
        '<i class="ph-fill ph-x-circle"></i>',
        "Lorem ipsum dolor sit amet consectetur. Enim quam nulla viverra senectus.",
        "Lorem ipsum dolor sit amet consectetur. Enim quam nulla viverra senectus."
    ]
];
?>

<div class="table__container">
    <div class="table__body">
        <h4>Заголовок H4</h4>
        <div class="table__wrapper">
            <table>
                <thead>
                    <tr>
                        <?php foreach ($columns as $col): ?>
                            <th><?= $col ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <?php foreach ($row as $cell): ?>
                                <td><?= $cell ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>