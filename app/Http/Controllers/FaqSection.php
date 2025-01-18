<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqSection extends Controller
{
    //
public function index()
{
    $faqs = [
        'General'=> [
        ['id' => 1,'question' => 'Can I see a timeline of past events on my property?', 'answer' => 'Yes, the app keeps a history of past events such as maintenance requests, inspections, and incidents. You can easily access the timeline and filter events by date or type.'],
        ['id' => 2,'question' => 'Can I get notifications for specific events like tenant complaints or emergencies?', 'answer' => 'Absolutely! You can set custom notifications for specific events such as tenant complaints, property damage, or emergency situations. The app will alert you immediately so you can take action.'],
        ['id' => 3,'question' => 'Can I monitor multiple properties at once?', 'answer' => 'Yes, you can manage multiple properties from a single account. The app allows you to switch between properties and monitor their events separately.'],
        ['id' => 4,'question' => 'Can tenants send requests or report issues directly through the app?', 'answer' => 'Yes, tenants can send maintenance requests, complaints, or general inquiries through the app, and you’ll receive them directly on your dashboard.'],
        ],

        'Financial Management' => [
            ['id'=>1, 'question'=> 'Can I see a detailed breakdown of my income and expenses?', 'answer'=> 'Yes, the app offers a comprehensive financial dashboard that breaks down income, expenses, and any other property-related financial activity. You can view monthly, quarterly, or annual reports.'],
            ['id'=>2, 'question'=> 'Does the app support tax filing for rental income?', 'answer'=> 'Yes, the app can generate tax reports based on your rental income, expenses, and deductions. This makes it easier for you to file taxes accurately and on time.'],
            ['id'=>3, 'question'=> 'Can I integrate my bank account to track payments automatically?', 'answer'=> 'Yes, the app integrates with payment gateways and bank accounts to automatically track incoming rent payments, providing a seamless way to monitor financial transactions.'],
            ['id'=>4, 'question'=> 'How do I handle late payment penalties?', 'answer'=> 'The app allows you to set up late payment fees, and these will be automatically applied to overdue rents. You can configure grace periods and penalty amounts according to your preferences.'],
            ['id'=>5, 'question'=> 'Can I set rent increases for tenants automatically?', 'answer'=> 'Yes, you can set automatic rent increases based on a percentage or fixed amount, and the app will notify your tenants about the upcoming changes in advance.'],
        ],
    

        'Property maintenance' => [
            ['id'=>1, 'question'=> 'Can I assign a maintenance request to a specific contractor?', 'answer'=> 'Yes, you can assign tasks to specific contractors or service providers in the app. You’ll also be able to track their progress and confirm when the task has been completed.'],
            ['id'=>2, 'question'=> 'How do I handle emergency maintenance requests?', 'answer'=> ' For urgent repairs or emergencies, you can flag requests as "urgent," which will notify you immediately. You can also prioritize these tasks and monitor the response time of your service providers.'],
            ['id'=>3, 'question'=> 'Can I add maintenance costs and track my budget?', 'answer'=> ' Yes, you can log maintenance costs and track the overall expenses for each property. This allows you to keep track of your budget and ensure you’re staying within your financial limits.'],
            ['id'=>4, 'question'=> 'Is there an option to receive photos or videos of property damages?', 'answer'=> 'Yes, tenants can upload photos or videos of any damage or maintenance issues directly through the app. This helps you better assess the situation before sending a repair team.'],
        ],

        'Legal and Lease information' => [
            ['id'=>1, 'question'=> 'How do I ensure my lease agreements comply with local laws?', 'answer'=> ' The app provides a library of customizable lease templates that comply with local rental laws. You can select the appropriate template based on your location and adjust it to suit your needs.'],
            ['id'=>2, 'question'=> 'Can I store legal documents related to the property in the app?', 'answer'=> 'Yes, you can store all legal documents such as insurance policies, property deeds, and contracts within the app. These are securely stored and easily accessible when needed.'],
            ['id'=>3, 'question'=> 'Can I create automated reminders for lease renewals?', 'answer'=> 'Yes, the app can send you automated reminders about upcoming lease renewals, giving you plenty of time to communicate with your tenants before the lease expires.'],
            ['id'=>4, 'question'=> 'Can I generate reports to review the legal status of my tenants?', 'answer'=> 'Yes, the app can generate tenant status reports that include payment history, lease terms, and any legal disputes or incidents, helping you stay informed about your tenants’ legal status.'],
        ],
    
    
        'More info about Tenants'=> [
        ['id' => 1,'question' => 'How can I view my tenant’s payment history?', 'answer' => 'Each tenant profile includes a payment history, which shows all payments made, the due dates, and any late fees incurred. You can view this information at any time and download reports.'],
        ['id' => 2,'question' => 'Can I message my tenants directly through the app?', 'answer' => 'Yes, you can send messages to your tenants directly through the app. All communication is logged and stored for your reference.'],
        ['id' => 3,'question' => 'What if I need to evict a tenant?', 'answer' => 'The app provides tools to track the eviction process, such as reminders for important deadlines, and document templates for notices. While the app can’t perform the eviction, it helps you stay organized throughout the process.'],
        ['id' => 4,'question' => 'Can tenants upload documents, such as rental applications or IDs?', 'answer' => 'Yes, tenants can upload documents securely through their profiles. You’ll be notified when new documents are added, and you can review them directly in the app.'],
        ],

        'Reports on Property'=> [
        ['id' => 1,'question' => 'Can I get an overall performance report of my property?', 'answer' => 'Yes, you can generate performance reports that show the occupancy rates, income, maintenance costs, and overall profitability of your property. This helps you make data-driven decisions.'],
        ['id' => 2,'question' => 'How can I track the health of my property’s market value?', 'answer' => 'The app can integrate market data and give you insights into the current value of your property. You can track how the value has changed over time and adjust your pricing strategies accordingly.'],
        ]
        ];


    return view('components.faq-section', compact('faqs'));
}

}
