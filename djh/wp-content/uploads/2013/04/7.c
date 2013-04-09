#include <stdio.h>
#include <stdlib.h>
#include <math.h>
typedef struct link
{
	int i;
	struct link *n;
}link;
link *h;
int main()
{
	int i=3,j,k=10000,l;
	link *p=h;
	h=malloc(sizeof(link));
	h->i=2;
	h->n=malloc(sizeof(link));
	while(k)
	{
		p=h;
		l=1;
		j=sqrt(i);
		while(p->i)
		{
			if(p->i<=j)if(!(i%p->i))
			{
				l=0;
				break;
			}
			p=p->n;
		}
		if(l)
		{
			p->n=malloc(sizeof(link));
			p->i=i;
			k--;
		}
		i++;
	}
	printf("%d\n",i-1);
	return 0;
}
