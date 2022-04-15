### Ecommerce Demo project



**Some notes about this project.**

I've used some classes/files from my e-commerce project and put it here. Unfortunatelly i can't show you whole project because it's commertial.


For the html template i used taildwindcss components. Not everything is working, it's just raw templating.

#### run project

just run

```bash
./runProject.sh
```


#### What's working
After running `runProject.sh` you should be able to access index page (/). There is **Trending products** section with 4 random products. You can click on each one of them. It will take you to detail page.
There you will have a possibility to add a product to a cart.
And then go to the cart page.
That's all for this demo, hope you will like it.


_____
Please don't look at formatting HTML/blade code. I'm using prettier with blade formatter extension for vscode. It's not always perfect but for this purpose works ;)
_____

#### Possible Issues

1. `moneyphp/money` requires `bc-math` extension

`sudo apt install php7.0-bcmath`

> without bcmath extension enabled parsing was really slow. I've noticed that casting to Money object took ~1 sec

2. 
`Class "NumberFormatter" not found`

solution: 

```bash
sudo apt-get install php-intl
```

and restart php cli.