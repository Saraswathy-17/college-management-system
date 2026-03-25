package java_based_bean_config;

import org.springframework.context.ApplicationContext;
import org.springframework.context.annotation.AnnotationConfigApplicationContext;

public class App 
{
    public static void main( String[] args )
    {
        ApplicationContext context=new AnnotationConfigApplicationContext(config.class);
        
       Book book= context.getBean(Book.class);
       Book book2=context.getBean(Book.class);

      
       System.out.println(book.hashCode());
       System.out.println(book2.hashCode());
       

    }
}
