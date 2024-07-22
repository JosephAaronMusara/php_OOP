<?php

/**
 * NameSpaces
 * are virtual directories in which classes, interfaces, functions, and constants are stored
 * avoid naming conflicts especially in big projects
 * declared using the namespace keyword
 * when  you want to access functions, constants, classes, or interfaces from a different namespace, 
 * you can use the use keyword or prefix them with \
 * e.g of namespace declaration:  namespace Aaron\Rivers\blog;
 * when importing from the same name space, we can bundle the classes e.g
 * use namespace Aaron\Rivers\{blog, finance};
 * or the namespace itself rather than classes 
 * i.e use Aaron\Rivers;
 * then $blog = new Rivers\blog();
 */

 /**
  * Aliasing: Just Like when we import python functions lol
    * you can alias a class or interface using the as keyword
    * this is useful when you want to use a class or interface with a different name
    * e.g use Aaron\Rivers\blog as Blog;
    * you can also alias a function or constant
    * e.g use function Aaron\Rivers\blog\getBlog as getArticle;
  */

  /**
   * 
   */