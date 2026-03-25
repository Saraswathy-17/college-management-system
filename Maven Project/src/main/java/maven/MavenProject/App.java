package maven.MavenProject;

import org.springframework.context.annotation.AnnotationConfigApplicationContext;

/**
 * Hello world!
 *
 */
public class App 
{
    public static void main( String[] args )
    {
    		AnnotationConfigApplicationContext container = new AnnotationConfigApplicationContext(Config.class);
    		Book b = container.getBean(Book.class);
    		System.out.println(b);
    }
}