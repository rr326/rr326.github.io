---
layout: post
type: "post"
---

I wanted to have two different blogs on my site (one for business topics and one focusing on development). Jekyll provides categories to make this work, but figuring out exactly how to move through posts in a given category was non-trivial.

A few key points:
* A for loop for an object gives you an array, where the first elment is a name. So, you generally need to treat that element differently.
* `{ % for category in site.categories % }` gives you: [[cat0name, cat0posts], [cat1name, cat1posts]...] (or something like that!
* `{ % for catposts in category % }` gives you all the posts in the category: [post1, post2, post3]
* `{ % for catpost in catposts % }` gives you the actual post objects, so you can do things like {{catpost.content}}
* Note: Above I have an extra space between the { and % - that's because otherwise jekyll tries to process the liquid tag!  (Below I put my code in a { % raw % } ... { % endraw % } block.


{% highlight jinja %}
{% raw %}
{% for category in site.categories %}
    {% if category[0] == page.rcategory %}
        {% for catposts in category %}
            {% if forloop.first %}
                {% continue %}
            {% endif %}
            {% for catpost in catposts %}

                <p>{{ catpost.title }}</p>

            {% endfor %}
        {% endfor %}
    {% endif %}
{% endfor %}
{% endraw %}
{% endhighlight %}

# Other tidbits
* If you change your _config.yml, be sure to restart your `jekyll serve --watch` - I can't tell you how many times I wasted minutes tracking down fake bugs because I forgot!
