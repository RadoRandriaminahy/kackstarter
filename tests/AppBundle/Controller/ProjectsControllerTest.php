<?php

namespace Tests\AppBundle;

use DateTime;
use AppBundle\Entity\Project;
use Tests\AppBundle\Framework\WebTestCase;


class ProjectsControllerTest extends WebTestCase
{

	public function test_index_should_list_all_projects()
	{

		$project1 = new Project;

		$project1->SetName('Project 1')
					->setDescription('Best Project 1 in the world')
					->setWebsite('www.projet1.com')
					->setExpiredOn(new DateTime('+ 4 years'))
					->setTargetAmount(10);

		$project2 = new Project;

		$project2->SetName('Project 2')
					->setDescription('Best Project 2 in the world')
					->setWebsite('www.projet2.com')
					->setExpiredOn(new DateTime('+ 1 years'))
					->setTargetAmount(5);

		$project3 = new Project;

		$project3->SetName('Project 3')
					->setDescription('Best Project 3 in the world')
					->setWebsite('www.projet3.com')
					->setExpiredOn(new DateTime('+ 60 days'))
					->setTargetAmount(20);

		$this->em->persist($project1);
		$this->em->persist($project2);
		$this->em->persist($project3);

		$this->em->flush();

		$this->visit('/projects')
			->assertResponseOk()
			->seeText('3 Projects')
			->seeText($project1->getName())
			->seeText(mb_substr($project1->getDescription(),0,$this->getParameter('default_truncate_limit')))
			->seeText('$10')
			->seeText($project1->getWebsite())
			->seeText($project1->getExpiredOn()->format($this->getParameter('date_format_default')))

			->seeText($project2->getName())
			->seeText($project3->getName())
		;
	}

}
