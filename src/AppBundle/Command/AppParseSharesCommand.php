<?php

namespace AppBundle\Command;

use AppBundle\Entity\Quote;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Validator\Constraints\DateTime;

class AppParseSharesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:parse-shares')
            ->setDescription('Парсинг котировок акций')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');
        /** @var EntityManager $em */
        $em = $this->getContainer()->get('doctrine')->getEntityManager();

//        if ($input->getOption('option')) {
        $uploadPath = $this->getContainer()->get('kernel')->getRootDir() . '/../web/upload';
        $filename = $uploadPath . '/mmvb.xml';
        $dataMoex = file_get_contents($filename);
//        }

        $result = new \SimpleXMLElement($dataMoex);
        if (isset($result->row)) {
            foreach ($result->row as $row) {
                $quote = new Quote();
                $_classMethods = get_class_methods($quote);
                foreach ($row->attributes() as $name => $rowAttributes) {
                    $method = 'set' . ucfirst(Quote::$according[$name]);
                    if (in_array($method, $_classMethods)) {
                        $quote->$method((string) $rowAttributes[0]);
                    }
                }
                $em->persist($quote);
                $em->flush();
            }
        } else {
            $output->writeln(sprintf('<comment>No quotes in the file "%s".</comment>', $filename));
        }

        $output->writeln('Command done.');
    }

}
