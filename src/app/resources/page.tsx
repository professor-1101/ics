"use client";

import Link from "next/link";
import Image from "next/image";
import Header from "@/components/Header";
import Footer from "@/components/Footer";
import { useState } from "react";

const resources = [
  {
    image: "https://ext.same-assets.com/4188355063/137517558.jpeg",
    type: "Whitepaper",
    title: "IEC 62443 Compliance Guide",
    description: "A comprehensive guide to achieving IEC 62443 compliance in industrial control systems",
    date: "January 15, 2025",
  },
  {
    image: "https://ext.same-assets.com/4188355063/2056420658.jpeg",
    type: "Case Study",
    title: "SCADA Security Implementation",
    description: "How we secured a critical SCADA infrastructure for a major utility provider",
    date: "January 10, 2025",
  },
  {
    image: "https://ext.same-assets.com/4188355063/238006369.jpeg",
    type: "Blog",
    title: "OT Security Best Practices",
    description: "Essential security practices every OT professional should implement",
    date: "January 5, 2025",
  },
  {
    image: "https://ext.same-assets.com/4188355063/2745962807.jpeg",
    type: "Report",
    title: "Critical Infrastructure Threats 2025",
    description: "Annual threat landscape report for critical infrastructure sectors",
    date: "December 28, 2024",
  },
  {
    image: "https://ext.same-assets.com/4188355063/2747679966.jpeg",
    type: "Whitepaper",
    title: "Zero Trust for OT Networks",
    description: "Implementing zero trust architecture in operational technology environments",
    date: "December 20, 2024",
  },
  {
    image: "https://ext.same-assets.com/4188355063/3235079041.jpeg",
    type: "Case Study",
    title: "Manufacturing Plant Security Overhaul",
    description: "Complete security transformation of a large-scale manufacturing facility",
    date: "December 15, 2024",
  },
  {
    image: "https://ext.same-assets.com/4188355063/63071544.jpeg",
    type: "Blog",
    title: "MITRE ATT&CK for ICS",
    description: "Understanding and applying MITRE ATT&CK framework to industrial systems",
    date: "December 10, 2024",
  },
  {
    image: "https://ext.same-assets.com/4188355063/2441607249.jpeg",
    type: "Report",
    title: "OT Security Trends Q4 2024",
    description: "Quarterly analysis of emerging threats and security trends in OT",
    date: "December 5, 2024",
  },
];

export default function Resources() {
  const [activeFilter, setActiveFilter] = useState("All");
  const filters = ["All", "Whitepaper", "Case Study", "Blog", "Report"];

  const filteredResources =
    activeFilter === "All"
      ? resources
      : resources.filter((resource) => resource.type === activeFilter);

  return (
    <div className="min-h-screen flex flex-col m-0 p-0">
      <Header />
      <main className="flex-grow">
        <div className="bg-white text-gray-900 font-sans">
          {/* Hero Section */}
          <section className="relative bg-gradient-to-br from-purple-900 via-purple-800 to-purple-900 py-24">
            <div className="max-w-7xl mx-auto px-6">
              <div className="text-center max-w-4xl mx-auto">
                <h1 className="text-5xl md:text-6xl font-bold text-white mb-8 leading-tight font-zen_dots">
                  Resources & Insights
                </h1>
                <p className="text-2xl text-gray-100 leading-relaxed">
                  Expert knowledge and insights on OT/ICS cybersecurity
                </p>
              </div>
            </div>
          </section>

          {/* Filter Section */}
          <section className="bg-gray-50 py-8 sticky top-16 z-40 border-b border-gray-200">
            <div className="max-w-7xl mx-auto px-6">
              <div className="flex flex-wrap gap-4 justify-center">
                {filters.map((filter) => (
                  <button
                    key={filter}
                    onClick={() => setActiveFilter(filter)}
                    className={`px-6 py-2 rounded-full text-lg font-semibold transition-all ${
                      activeFilter === filter
                        ? "bg-purple-800 text-white"
                        : "bg-white text-gray-700 hover:bg-gray-100 border border-gray-300"
                    }`}
                  >
                    {filter}
                  </button>
                ))}
              </div>
            </div>
          </section>

          {/* Resources Grid */}
          <section className="bg-white py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="grid md:grid-cols-4 gap-8">
                {filteredResources.map((resource, index) => (
                  <div
                    key={index}
                    className="bg-white rounded-lg overflow-hidden hover:shadow-xl transition-shadow border border-gray-200"
                  >
                    <div className="h-48 relative overflow-hidden">
                      <Image
                        src={resource.image}
                        alt={resource.title}
                        fill
                        className="object-cover"
                      />
                      <div className="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent" />
                    </div>
                    <div className="p-6">
                      <span className="inline-block bg-purple-800 text-white text-sm font-semibold px-3 py-1 rounded mb-3">
                        {resource.type}
                      </span>
                      <h3 className="text-xl font-bold text-gray-900 mb-3 leading-tight font-zen_dots">
                        {resource.title}
                      </h3>
                      <p className="text-gray-600 text-sm mb-3">{resource.description}</p>
                      <p className="text-gray-500 text-xs mb-4">{resource.date}</p>
                      <button className="text-purple-800 font-semibold hover:text-purple-900 transition-colors">
                        Read More →
                      </button>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </section>

          {/* Featured Resource */}
          <section className="bg-gray-50 py-20">
            <div className="max-w-7xl mx-auto px-6">
              <div className="bg-white rounded-lg overflow-hidden shadow-xl">
                <div className="grid md:grid-cols-2">
                  <div className="relative h-96 overflow-hidden">
                    <Image
                      src="https://ext.same-assets.com/4188355063/2843533455.jpeg"
                      alt="The Complete Guide to OT Security"
                      fill
                      className="object-cover"
                    />
                    <div className="absolute inset-0 bg-gradient-to-r from-purple-900/30 to-transparent" />
                  </div>
                  <div className="p-12 flex flex-col justify-center">
                    <span className="inline-block bg-purple-800 text-white text-sm font-semibold px-3 py-1 rounded mb-4 w-fit">
                      Featured
                    </span>
                    <h2 className="text-4xl font-bold text-gray-900 mb-6 font-zen_dots">
                      The Complete Guide to OT Security
                    </h2>
                    <p className="text-xl text-gray-700 leading-relaxed mb-6">
                      A comprehensive resource covering everything from basic concepts to advanced security
                      strategies for operational technology environments.
                    </p>
                    <button className="bg-purple-800 text-white text-lg font-semibold px-8 py-4 rounded-lg hover:bg-purple-900 transition-all w-fit">
                      Download Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>

          {/* Newsletter Section */}
          <section className="bg-gradient-to-r from-purple-900 to-purple-800 py-16">
            <div className="max-w-4xl mx-auto px-6 text-center">
              <h2 className="text-4xl font-bold text-white mb-4 font-zen_dots">Stay Updated</h2>
              <p className="text-xl text-gray-100 mb-8">
                Subscribe to our newsletter for the latest insights on OT/ICS security
              </p>
              <div className="flex justify-center">
                <button className="bg-white text-purple-800 text-lg font-semibold px-8 py-4 rounded-lg hover:bg-gray-100 transition-all">
                  Subscribe
                </button>
              </div>
            </div>
          </section>
        </div>
      </main>
      <Footer />
    </div>
  );
}
