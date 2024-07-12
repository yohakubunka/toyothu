<?php
$url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$web_server = false;
global $is_apache;
global $is_IIS;
global $is_iis7;
if ($is_apache && !$web_server) {
    $web_server = "Apache HTTP Server";
}
if ($is_IIS && !$web_server) {
    $web_server = "Microsoft Internet Information Services (IIS)";
}
if ($is_iis7 && !$web_server) {
    $web_server = "Microsoft Internet Information Services (IIS) v7.x";
}
if (!$web_server) {
    $web_server = "unknown";
}


?>
<div class="section-wrap">
    <p class="toggle-trigger">Basic info</p>
    <div class="toggle">
        <table>
            <tbody>
                <tr>
                    <th>Url</th>
                    <td><?= $url ?></td>
                </tr>

                <tr>
                    <th>Current PHP version</th>
                    <td><?= phpversion() ?></td>
                </tr>

                <tr>
                    <th>Web server</th>
                    <td><?= $web_server ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php
global $wp_version;
global $template;
global $post;
//global $wp_query;
?>
<div class="section-wrap">
    <p class="toggle-trigger">WordPress info</p>
    <div class="toggle">
        <table>
            <tbody>
                <tr>
                    <th>WordPress version</th>
                    <td><?= $wp_version ?></td>
                </tr>

                <tr>
                    <th>Use template file name</th>
                    <td><?= basename($template) ?></td>
                </tr>

                <tr>
                    <th>$post</th>
                    <td><?php debug($post); ?></td>
                </tr>

                <!-- <tr>
                    <th>$wp_query->posts</th>
                    <td><?php //debug($wp_query->posts); 
                        ?></td>
                </tr> -->
            </tbody>
        </table>
    </div>
</div>