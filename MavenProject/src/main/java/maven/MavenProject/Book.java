package maven.MavenProject;

import org.springframework.beans.factory.annotation.Value;
import org.springframework.stereotype.Component;

@Component
public class Book {
	@Value("MyBook")
	String bookName;

	public Book() {
		super();
		// TODO Auto-generated constructor stub
	}

	public Book(String bookName) {
		super();
		this.bookName = bookName;
	}

	@Override
	public String toString() {
		return "Book [bookName=" + bookName + ", getBookName()=" + getBookName() + ", getClass()=" + getClass()
				+ ", hashCode()=" + hashCode() + ", toString()=" + super.toString() + "]";
	}

	public String getBookName() {
		return bookName;
	}

	public void setBookName(String bookName) {
		this.bookName = bookName;
	}
}
