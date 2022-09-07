<page>

    <div>
        <?php

        $blog = $this->db->get_where('blog', ['id' => $id])->row();

        $data = [
        'blog' => $blog,
                    'blog_category' => $this->db->get_where('blog_category', [
            'category_id' => $blog->category
            ])->result_array(),

                    'aauth_groups' => $this->db->get_where('aauth_groups', [
            'name' => $blog->tags
            ])->row_array(),

        
        ];

        echo $twig->render('blog_content_4.php', $data);

        ?>

    </div>
    <code></code>

</page>